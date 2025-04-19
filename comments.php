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
    <div class="commentContainer">

        <?php
$thread_id = $_GET['threadid'];
$id = $_GET['catid'];

$sql = "SELECT * FROM `threads` WHERE `thread_id` = $thread_id AND `catagory_id` = $id";
$result = mysqli_query($conn, $sql);
        if($result){
$row = mysqli_fetch_assoc($result);
                $thread_title= $row['thread_title'];
                $thread_desc= $row['thread_desc'];
            
                echo '
                 <div class="commentBox">
            <h2>'.$thread_title.'</h2>
            <p>'.$thread_desc.'</p>
        </div>
                ';

            }
        else{
            echo 'Error';
        }




        // Insert Data from form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];

        $sql2= "INSERT INTO `comments` ( `comment_title`, `user_id`, `thread_id`, `catagory_id`) VALUES ('$comment',  '0', '$thread_id', '$id');";
        $result2 = mysqli_query($conn, $sql2);
        if(!$result2){
echo"Error";
    }
}
?>

        <div class="heading">
            <h3>Write your thought here</h3>
        </div>
        <div class="questionForm">
            <form action="" method="POST">
                <label for="comment">Write your suggestion</label>
                <input type="text" name="comment" id="">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="heading">
            <h2>Browse the Suggestion</h2>
        </div>
        <?php
$sql3 = "SELECT * FROM `comments` WHERE `thread_id` = $thread_id AND `catagory_id` = $id";
$result3 = mysqli_query($conn, $sql3);
        if($result3){
        if(mysqli_num_rows($result3) < 1){
            echo'
           <div class="noComment flex">
        <img src="images/noResult.png" alt="">
            <div>
                <h2>No result found!</h2>
                <p>Be the first person to post a comment</p>
            </div>
        </div>
           ';
        }else{

            while ($row = mysqli_fetch_assoc($result3)) {
                $comment= $row['comment_title'];
                
                echo'
                <div class="comment flex">
            <div class="flex">
                <img src="images/user.png" alt="">
                <h3>'.$comment.'</h3>
            </div>
            <h4>asked by: rjtech@gmail.com</h4>
        </div>
                ';
                
            }
        }
    }else{
echo'Error';
    }



        ?>




    </div>
    <?php  include'partials/_footer.php'; ?>
</body>

</body>

</html>