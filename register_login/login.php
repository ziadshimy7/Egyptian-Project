<?php
if(session_id()==""){

    session_start(); 
} 
?>
<?php include "connection.php" ?>
<?php
    $username=$_POST["username"];
    $password=$_POST["password"];
    $hashedPassword=md5($password);
    //Check if user exists in database
    $query="SELECT user_id,username,password FROM users WHERE username ='$username' AND password ='$hashedPassword' ";

    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    // echo $count;
    //If the count variable is > 1,this means that our database contains a record of the user that is trying to login
    if($count>0){
        $_SESSION["username"]=$username;//session stores information about user , $_SESSION is an array that will include everything about the current session, for example : username,password and etc..
        $_SESSION["user_id"]=$row["user_id"];
        header("Location:../Historical Places/index.php");// This function redirects the user to a different page (it can be a server page or any other page like google.com)
        
      exit();
    }
    else {
        echo "invalid username/password";
    }

?>