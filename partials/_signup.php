<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup on R.J Tech</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<body>
    <!-- Forms -->
    <div class="signupForm flex">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <label for="cPassword">Confirm Password:</label>
            <input type="cPassword" name="cPassword" id="cPassword">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>