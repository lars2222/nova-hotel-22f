<?php

require 'database.php';


$stmt = $conn->prepare("SELECT * FROM rooms");
$stmt->execute();

// set the resulting array to associative
$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
            <th>kamernummer</th>
            <th>kamertype</th>
            <th>aantal bedden</th>
            <th>badkamer type</th>
            <th>uitzicht</th>
            <th>verdieping</th>
            <th>heeft balkon</th>
        </thead>
        <tbody>
            <?php foreach($rooms as $room)  :  ?>
                <tr>
                    <td><?php echo $room["room_number"]; ?></td>
                    <td><?php echo $room["room_type"]; ?></td>
                    <td><?php echo $room["bed_count"]; ?></td>
                    <td><?php echo $room["bathroom_type"]; ?></td>
                    <td><?php echo $room["view_type"]; ?></td>
                    <td><?php echo $room["floor_level"]; ?></td>
                    <td><?php echo $room["has_balcony"] == 1? "ja" : "nee";?></td>
                    <td><a href="rooms_delete.php?room_id=<?php echo $room["room_id"];?>">delete</a></td>
                </tr>
                <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>