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
    <div class="threadContainer flex">
        <div class="threadHeader flex">
            <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `catagory` Where catagory_id=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
            $row = mysqli_fetch_assoc($result);
            $title= $row['catagory_title'];
        $desc= $row['catagory_desc'];
                echo '
                <img src="images/card_'.$id.'.jpg" alt="">
<div>
    <h2>'.$title.'</h2>
    <p>'.$desc.'</p>
</div>
                ';
            }
        else{
            echo 'Error';
        }

        // Insert Data from form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $thread_title = $_POST['thread_title'];
    $thread_desc = $_POST['thread_desc'];
$user_id = $_SESSION['user_id'];
        $sql2= "INSERT INTO `threads` ( `thread_title`, `thread_desc`, `user_id`, `catagory_id`) VALUES ('$thread_title', '$thread_desc', '$user_id', '$id');";
        $result2 = mysqli_query($conn, $sql2);
        if(!$result2){
echo"Error";
    }
}
        ?>


        </div>
        <div class="heading">
            <h2>Start a Discussion</h2>
        </div>
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            echo '
            <div class="questionForm">
                <form action="?catid=' . $id . '" method="POST">
                    <label for="thread_title">Write the Question</label>
                    <input type="text" name="thread_title" required>
                    <label for="thread_desc">Explain a little bit about your question</label>
                    <input type="text" name="thread_desc" required>
                    <button type="submit">Submit</button>
                </form>
            </div>';
        } else {
            echo "<p>Please login first to post a question.</p>";
        }
        ?>

    </div>

    <div class="threadBox">
        <h2>Browse a Discussion</h2>
        <?php
$sql3= "SELECT * FROM `threads` Where `catagory_id`=$id";
$result3 = mysqli_query($conn, $sql3);
        if($result3){
        
        if(mysqli_num_rows($result3) < 1){
            echo'
            <div class="nothread flex">
            <img src="images/noResult.png" alt="">
            <div>
                <h2>No result found!</h2>
                <p>be the first person to start discussion.</p>
            </div>
        </div>
           ';
        }else{

            while ($row = mysqli_fetch_assoc($result3)) {
                $threadid=$row['thread_id'];
                $title= $row['thread_title'];
                $desc= $row['thread_desc'];
                $user_id= $row['user_id'];
                $userSql="SELECT * FROM `users` Where user_id=$user_id";
                $userResult=mysqli_query($conn, $userSql);
                $userRow = mysqli_fetch_assoc($userResult);
                $username=$userRow['Username'];


                echo'
                <a href="/forum/comments.php?threadid='.$threadid.'&catid='.$id.'">
                <div class="thread flex">
                <div class="flex">
                <img src="images/user.png" alt="">
                <div class="flex">
                <h2>'.$title.'</h2>
                <p>'.$desc.'</p>
                </div>
                </div>
                <p>Asked by: '.$username.'</p>
                </div>
                </a>
                ';
                
            }
        }
    }else{
echo'Error';
    }

        ?>

    </div>
    <?php  include'partials/_footer.php'; ?>


    <script src="script.js"></script>
</body>

</html>