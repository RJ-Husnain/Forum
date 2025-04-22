<?php
session_start();

echo '
<nav class="navbar flex">
    <div class="navigation flex">
        <img src="/forum/icons/hamburger.svg" alt="" id="hamburger">
        <div class="logo">
            <img src="/forum/images/logo.png" alt="Logo">
        </div>
        <div class="menu">
            <ul class="flex">
                <li><a href="/forum">Home</a></li>
                <li class="flex">Category <span><img src="/forum/icons/downArrow.svg" alt=""></span></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
    </div>
    <div class="buttons flex">';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '
    <a href="" class="anchor">
     <button id="profile" class="flex">
        <img src="/forum/icons/profile.svg" alt="Profile Icon" id="profile_img">
        <p>Profile</p>
    </button>
    <a/>
       
    ';
} else {
    echo '
        <a href="/forum/partials/_login.php">
            <button id="login">Login</button>
        </a>
        <a href="/forum/partials/_signup.php">
            <button id="signup">Sign up</button>
        </a>
    ';
}

echo '
    </div>
</nav>';
?>
