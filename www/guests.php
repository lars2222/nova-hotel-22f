<?php

require 'database.php';

$role = 'guest';

$stmt = $conn->prepare("SELECT * FROM users WHERE role = :$role  ");
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
            <th>voornaam</th>
            <th>achternaam</th>
            <th>email</th>
        </thead>
        <tbody>
            <?php foreach($rooms as $room)  :  ?>
                <tr>
                    <td><?php echo $room["user_id"]; ?></td>
                    <td><?php echo $room["forename"]; ?></td>
                    <td><?php echo $room["lastname"]; ?></td>
                    <td><?php echo $room["email"]; ?></td>
                    <td><a href="rooms_delete.php?room_id=<?php echo $room["room_id"];?>">delete</a></td>
                </tr>
                <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>