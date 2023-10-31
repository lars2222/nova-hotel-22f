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
        <form name="login" action="process-register.php" method="post">
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
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="enter your password">
            </div>
            <button type="submit">registreer</button>
        </form>
    </div>
</body>
</html>