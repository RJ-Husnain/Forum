<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to R.J Tech</title>
    <link rel="stylesheet" href="form.css">
</head>
<body class="flex">
    <!-- login -->
    <div class="loginForm flex">
        <div class="form">
            <h2>Login to <span>R.J Tech</span></h2>
            <p>Doesn't have an account <a href="/forum/partials/_signup.php">Signup</a></p>
            <form class="flex" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="flex">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
</div>

<div class="flex">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
</div>

                <button type="submit">Login</button>
            </form>
        </div>
        <div class="img">
            <img src="../images/form.jpg" alt="Login Illustration">
        </div>
    </div>
</body>
</html>
