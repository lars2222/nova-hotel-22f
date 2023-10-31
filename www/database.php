<?php
$servername = "mariadb";
$username = "user";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=nova-hotel-22f", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}