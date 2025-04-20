<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="form.css">
</head>
<body class="flex">
    <!-- login -->
    <div class="loginForm flex">
        <div class="form">
            <h2>Reset <span>Password</span></h2>
            <p>Doesn't have an account <a href="/forum/partials/_signup.php">Signup</a></p>
            <form class="flex" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="flex input">
    <label for="password">Password</label>
    <h6>( Password must contain a digit, uppercase, lowercase, symbol and max 8-digits long )</h6> 
    <input type="password" id="password" name="password" required>
    <p class="weak">Password is Weak!</p>
</div>

<div class="flex input">
    <label for="cpassword">Confirm Password</label>
    <input type="password" id="cpassword" name="cpassword" required>
    <p class="match">Password doesn't Match!</p>
</div>
    <button type="submit">Signup</button>
            </form>
        </div>
        <div class="img">
            <img src="../images/form.jpg" alt="Login Illustration">
        </div>
    </div>
    <script src="form.js"></script>
</body>
</html>
