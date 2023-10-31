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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    WELCOME TO THE DASHBOARD <?php echo $_SESSION['firstname'] ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $user['forename']; ?></p>
                        <p class="card-text"><?php echo $user['lastname']; ?></p>
                        <p class="card-text"><?php echo $user['dob']; ?></p>
                        <p class="card-text"><?php echo $user['email']; ?></p>
                        <p>
                            <a href="users_update_profile.php">update profiel</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>