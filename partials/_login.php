<?php
include '_dbconnect.php';

$setError = false; 
$errorMsg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username= $_POST['username'];
   $password= $_POST['password'];
   
   $checkSql = "SELECT * FROM `users` WHERE `Username` = '$username'";
   $checkResult = $conn->query($checkSql);
   if(mysqli_num_rows($checkResult) > 0){
       $row = mysqli_fetch_assoc($checkResult);
       $hash = $row['password'];
       $user_id = $row['user_id'];
       if (password_verify($password, $hash)) {
           //    echo'login Successfully.';
           session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user_id;

        header("Location: ../index.php");
        exit;
        }else{
            // echo" incorrect Password";
            $setError = true;
            $errorMsg = "Incorrect Password";
        }
    }
    else{
        // echo"username doesn't exist";
        $setError = true;
            $errorMsg = "Username doesn't exist";
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to R.J Tech</title>
    <link rel="stylesheet" href="form.css">
</head>
<body class="flex">
<?php
    if ($setError) {
       echo '
       <div class="error flex">
           <h2>'.$errorMsg.'</h2>
       </div>
       ';
    }
    ?>
    <!-- login -->
    <div class="loginForm flex">
        <div class="form">
            <h2>Login to <span>R.J Tech</span></h2>
            <p>Doesn't have an account <a href="/forum/partials/_signup.php">Signup</a></p>
            <form class="flex" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="input flex">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
</div>

<div class="input flex">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
    <p>Incorrect Password!</p>
</div>

    <a href="/forum/partials/_forget.php" class="forget"><p>Forget Password?</p></a>
    <button type="submit">Login</button>

            </form>
        </div>
        <div class="img">
            <img src="../images/form.jpg" alt="Login Illustration">
        </div>
    </div>

</body>
</html>
