<?php
require 'database.php';
session_start();

if (!isset($_SESSION['isLoggedIn']) || !($_SESSION['isLoggedIn']) || !isset($_SESSION['id'])) {
    echo "Jij bent niet geautoriseerd";
    exit;
}

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE user_id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":user_id", $user_id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

include 'header.php';
include 'navigation.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="login-container">
        <h1>registreer</h1>
        <form name="login" action="procces_update_user.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="voornaam">voornaam:</label>
                <input type="text" id="forename" name="forename" required placeholder="enter your forename">
            </div>
            <div class="form-group">
                <label for="lastname">achternaam:</label>
                <input type="text" id="lastname" name="lastname" required placeholder="enter your lastname">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required placeholder="enter your email">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <button type="submit">update</button>
        </form>
    </div>
<?php include 'footer.php'?>

