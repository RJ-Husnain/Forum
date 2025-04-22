<?php
echo '
<nav class="navbar flex">
    <div class="navigation flex">
        <img src="/forum/icons/hamburger.svg" alt="" id="hamburger">
        <div class="logo">
            <img src="/forum/images/logo.png" alt="">
        </div>
        <div class="menu">
            <ul class="flex">
                <li><a href="/forum">Home </a></li>
                <li class="flex">Catagory <span><img src="/forum/icons/downArrow.svg" alt=""></span></li>
                <li>About</li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
    <div class="buttons flex">
    
    <a href="/forum/partials/_login.php">
    <button id="login">login</button>
    </a>

    <a href="/forum/partials/_signup.php">
    <button id="signup">Sign up</button>
    </a>
    </div>
</nav>
';
?>
