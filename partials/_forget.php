<?php
include '_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username= $_POST['username'];
   
   $checkSql = "SELECT * FROM `users` WHERE `Username` = '$username'";
   $checkResult = $conn->query($checkSql);
   if(mysqli_num_rows($checkResult) > 0){
    $row = mysqli_fetch_assoc($checkResult);
    $id= $row['user_id'];
        //    echo'Username Found';
        header("Location: _resetPassword.php?id=$id");
        exit;
    }
    else{
        echo"username doesn't exist";
    }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="form.css">
</head>
<body class="flex">
    <!-- login -->
    <div class="loginForm flex">
        <div class="form">
            <h2>Forget <span>Password</span></h2>
            <p>Doesn't have an account <a href="/forum/partials/_signup.php">Signup</a></p>
            <form class="flex" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="input flex">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
    <p>Username not Found!</p>
</div>
    <button type="submit">Submit</button>
            </form>
        </div>
        <div class="img">
            <img src="../images/form.jpg" alt="Login Illustration">
        </div>
    </div>
</body>
</html>
