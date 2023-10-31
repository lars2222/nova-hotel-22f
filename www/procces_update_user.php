<?php

require 'database.php';

if (!isset($_POST['forename']) || !isset($_POST['lastname']) || !isset($_POST['dob'])) {
    echo "Er is een veld niet ingevuld";
    exit;
}

if (empty($_POST['forename']) || empty($_POST['lastname']) || empty($_POST['dob'])) {
    echo "Er is iets niet ingevuld";
    exit;
}

$forename = $_POST['forename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dob = $_POST['dob'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Vul een bestaand emailadres in met @ en een domein";
    exit;
}

session_start();

$sql = "UPDATE users SET forename = :forename, lastname = :lastname, dob = :dob, email = :email WHERE user_id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":forename", $forename);
$stmt->bindParam(":lastname", $lastname); // Corrected parameter name
$stmt->bindParam(":dob", $dob);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":user_id", $_SESSION['id']);

if ($stmt->execute()) {
    echo "Profile has been updated";
    exit;
} else {
    echo "An error occurred while updating the profile";
}