
<?php 
if(session_id()==""){

  session_start(); 
}  ?><?php include "../register_login/connection.php" ?>
<?php
// if(isset($_SESSION["username"])){ // We get the username from the other page using the session
    $do=isset($_GET["do"]) ? $_GET["do"]:"comment";
    $monument_id="";
    $username="";
    $comment="";
    if($do=="comment"){
        $monument_id=isset($_GET["monument_id"]) && is_numeric($_GET["monument_id"]) ? intval($_GET["monument_id"] ) : 0;
        $queryFetchMonument="SELECT * FROM monuments WHERE monument_id ='$monument_id' ";
        $resultFetchMonument=mysqli_query($connection,$queryFetchMonument);
        $countMonument=mysqli_num_rows($resultFetchMonument);
        $rowMonument=mysqli_fetch_assoc($resultFetchMonument);
        if(!$countMonument>0){
            echo "Nothing found";
        }        
    }
?>
<?php
if(isset($_POST["submit"])){
    $usernameComment=$_SESSION["username"];
    $comment=$_POST["comment"];
    $date=date("Y-m-d\TH:i:s");
    $query="INSERT INTO comments1(comment_id, comment_author,monument_id,comment_content,comment_date) VALUES (NULL,'$usernameComment','$monument_id','$comment','$date')";
    $results=mysqli_query($connection,$query);
    if(!$results){
        echo "Try again";
    }
}
?>

<?php
$queryImage="SELECT * FROM images WHERE monument_id='$monument_id'";
$resultImage=mysqli_query($connection,$queryImage);
$imagesCount=mysqli_num_rows($resultImage);

?>
