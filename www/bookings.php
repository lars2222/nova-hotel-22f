<?php

require 'database.php';

session_start();


$stmt = $conn->prepare("SELECT * FROM `bookings`
JOIN users ON users.user_id = bookings.user_id
JOIN rooms ON rooms.room_id = bookings.room_id;");
$stmt->execute();

// set the resulting array to associative
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>booking id</th>
               <th>voornaam</th>
               <th>achternaam</th>
               <th>kamer</th>
               <th>begin datum</th>
               <th>eind datum</th>
               <th>aantal mensen</th>
               <th>prijs</th>
            </tr>
            
        </thead>
        <tbody>
            <?php foreach($bookings as $booking)  :  ?>
                <tr>
                    
                    <td><?php echo $booking["id"]; ?></td>
                    <td><?php echo $booking["forename"]; ?></td>
                    <td><?php echo $booking["lastname"]; ?></td>
                    <td><?php echo $booking["room_id"]; ?></td>
                    <td><?php echo $booking["start_date"]; ?></td>
                    <td><?php echo $booking["end_date"]; ?></td>
                    <td><?php echo $booking["number_of_people"]; ?></td>
                    <td><?php echo $booking["price"]; ?></td>
                </tr>
                <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>