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
     <button id="profile" class="flex">
        <img src="/forum/icons/profile.svg" alt="Profile Icon" id="profile_img">
        <p>Profile</p>
    </button>     
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
        <div id="hamburgerBox">
            <ul>
                <li><a href="/forum/index.php">Home</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div id="profileBox">
            <div class="img_box flex">
                <img src="/forum/images/user.png" alt="">
            </div>
            <div class="text_box flex">
                <p>';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo $_SESSION['username'];
}

echo '</p>
                <a href="/forum/partials/_logout.php">
                    <button id="logout">Logout</button>
                </a>
            </div>
        </div>
    </div>
</nav>';
?>
