<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.J Tech - Empower world with Tech</title>
    <link rel="stylesheet" href="src/utility.css">
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <?php  include'partials/_dbconnect.php'; ?>
    <?php  include'partials/_navbar.php'; ?>
    <?php  include'partials/_header.php'; ?>

    <div id="profileBox" class="flex">
        <div class="img_box flex">
            <img src="images/user.png" alt="User Avatar">
        </div>
        <div class="text_box flex">
            <p>Husnain</p>
            <a href="/forum/partials/_logout.php">
            <button id="logout">Logout</button>
        </a>
        </div>
    </div>


    <div class="heading flex">
        <h2>Browse Catagory</h2>
    </div>

    <!-- Container -->
    <div class="container flex ">
        <?php
$sql = "SELECT * FROM `catagory`";
$result = mysqli_query($conn, $sql);
if($result){
$id= 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $id +=1;
        $title= $row['catagory_title'];
        $desc= $row['catagory_desc'];

        echo '
        <a href="/forum/threads.php?catid='.$id.'">
    <div class="card">
        <img src="images/card_'.$id.'.jpg" alt="">
        <div class="flex">
            <h2>'.$title.'</h2>
            <p>'.$desc.'</p>
        </div>
    </div>
   </a>
        ';
    }

}else{
    echo 'Error';
}



?>


    </div>

    <!-- Footer -->
    <?php  include'partials/_footer.php'; ?>

    <script src="script.js"></script>

</body>

</html>