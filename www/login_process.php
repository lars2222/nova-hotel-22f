<?php
require 'database.php';

// Check if POST data is set and not empty
if (!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])) {
    echo 'Something went wrong';
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

// Set the resulting array to associative
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($stmt->rowCount() == 0) {
    echo "We do not know you! Please stay away!!!";
    exit;
}

if (password_verify($password, $user['password'])) {

    // Move session_start() to the top before any output
    session_start();

    $_SESSION['isLoggedIn'] = true;
    $_SESSION['id'] = $user['user_id'];
    $_SESSION['firstname'] = $user['forename'];


    // Use header() after session_start() and before any output
    header("Location: dashboard.php");
    exit;
}
?>