<?php
include '_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username= $_POST['username'];
   $password= $_POST['password'];
   $password_hash= password_hash($password, PASSWORD_DEFAULT);

   $checkSql = "SELECT * FROM `users` WHERE `Username` = '$username'";
   $checkResult = $conn->query($checkSql);
   if(mysqli_num_rows($checkResult) == 0){
       $sql="INSERT INTO `users` (`Username`, `password`) VALUES ('$username', '$password_hash' );";
       $result = $conn->query($sql);
       if ($result) {
           // echo'Password Inserted Successfully.';
           header("Location: _login.php");
           exit;
        }else{
            echo"Password didn't inserted.";
        }
    }
    else{
        echo"username already exist";
    }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup to R.J Tech</title>
    <link rel="stylesheet" href="form.css">
</head>
<body class="flex">
    <!-- login -->
    <div class="loginForm flex">
        <div class="form">
            <h2>Signup to <span>R.J Tech</span></h2>
            <p>Already have an Account <a href="/forum/partials/_login.php">Login</a></p>
            <form class="flex" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="flex input">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
    <p>Username Already Exsit!</p>
</div>
 
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
