<?php

require 'database.php';


if (!isset($_POST['room_number']) || !isset($_POST['room_type']) || !isset($_POST['bed_count'])|| !isset($_POST['bathroom_type'])|| !isset($_POST['view_type'])|| !isset($_POST['floor_level'])|| !isset($_POST['has_balcony'])) {
    echo "Er is een veld niet ingevuld";
    exit;
}

if (empty($_POST['room_number']) || empty($_POST['room_type']) || empty($_POST['bed_count'])|| !isset($_POST['bathroom_type'])|| !isset($_POST['view_type'])|| !isset($_POST['floor_level'])|| !isset($_POST['has_balcony'])) {
    echo "Er is iets niet ingevuld";
    exit;
}

$room_number = $_POST["room_number"];
$room_type = $_POST["room_type"];
$bed_count = $_POST["bed_count"];
$bathroom_type = $_POST["bathroom_type"];
$view_type = $_POST["view_type"];
$floor_level = $_POST["floor_level"];
$has_balcony = ($_POST["has_balcony"] === "Yes") ? 1 : 0;

// Check if room number is unique
$checkRoomNumberSql = "SELECT COUNT(*) FROM rooms WHERE room_number = :room_number";
$checkStmt = $conn->prepare($checkRoomNumberSql);
$checkStmt->bindParam(":room_number", $room_number);
$checkStmt->execute();

if ($checkStmt->fetchColumn() > 0) {
    echo "Room number is already in use. Please choose a different room number.";
    exit;
}

$sql = "INSERT INTO rooms (room_number, room_type, bed_count, bathroom_type, view_type, floor_level, has_balcony)
 VALUES (:room_number, :room_type, :bed_count, :bathroom_type, :view_type, :floor_level, :has_balcony)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":room_number", $room_number);
$stmt->bindParam(":room_type", $room_type);
$stmt->bindParam(":bed_count", $bed_count);
$stmt->bindParam(":bathroom_type", $bathroom_type);
$stmt->bindParam(":view_type", $view_type);
$stmt->bindParam(":floor_level", $floor_level);
$stmt->bindParam(":has_balcony", $has_balcony);

if($stmt->execute()){
    echo "je hebt een kamer aangemaakt";
    exit;
}