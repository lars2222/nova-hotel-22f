<?php

require 'database.php';


$id = $_GET['room_id'];

$sql = "DELETE FROM rooms WHERE room_id = :room_id";

$statement = $conn->prepare($sql);
$statement->bindParam(":room_id", $id);

if($statement->execute()){
    header("location: rooms.php");
    exit;
}    

