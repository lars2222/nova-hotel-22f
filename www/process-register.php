<?php

require 'database.php';


if(!isset($_POST['forename']) ||!isset($_POST['lastname'])||!isset($_POST['password'])){
    echo "er is een veld niet ingevult";
    exit;
}
if(empty($_POST['forename'])||empty($_POST['lastname'])||empty($_POST['password'])){
    echo "er is iets niet ingevult";
    exit;
}

$forename = $_POST['forename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Vul een  emailadres in met @ en een domein";
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

include 'functions.php';

$key = generateConfirmationKey();



// Controleer of de gebruiker al in de database staat
$check_query = "SELECT COUNT(*) AS count FROM users WHERE email = :email";
$check_stmt = $conn->prepare($check_query);
$check_stmt->bindParam(":email", $email);
$check_stmt->execute();
$result = $check_stmt->fetch(PDO::FETCH_ASSOC);

if ($result['count'] > 0) {
    echo "Deze gebruiker bestaat al.";
    exit;
}

$sql = "INSERT INTO users (forename, lastname, email, password) VALUES (:forename, :lastname, :email, :password)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":forename", $forename);
$stmt->bindParam(":lastname", $lastname);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":password", $hashed_password);

if($stmt->execute()){
    include 'send-email.php';
    header("location: thank-you-register");
}