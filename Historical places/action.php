<?php include "../register_login/connection.php" ?>
<?php
if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $comment=$_POST["comment"];
    $date=date("Y-m-d");
    $query="INSERT INTO comments(comment_id, comment_author, comment_content,comment_date) VALUES (NULL,'$username','$comment','$date')";
    $results=mysqli_query($connection,$query);
    if($results){
        echo "Successful connection ! ";
    }
}
?> 