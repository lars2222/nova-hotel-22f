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
        <h1>Login</h1>
        <form name="login" action="login_process.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required placeholder="enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="enter your password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <div>
        nog geen account?<a href="register.php">registreer</a>
    </div>
</body>
</html>

