<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login on R.J Tech</title>
    <link rel="stylesheet" href="loign.css">
</head>

<body>
    <div class="container flex">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="form flex">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <label for="cPassword">Confirm Password:</label>
            <input type="cPassword" name="cPassword" id="cPassword">
            <button type="submit">login</button>
        </form>
        <div class="image flex">
            <img src="/FORUM/images/background1.png" alt="background">
        </div>
    </div>
</body>

</html>