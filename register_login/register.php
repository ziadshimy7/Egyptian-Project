<?php
$error=NULL;
$username=$_POST["username"];
$password=$_POST["password"];
$password2=$_POST["password2"];
$email=$_POST["email"];
$fullName=$_POST["fullName"];
//Checking for weak username/passwords typed by the user
if(strlen($username)<8){
   $error="Your username should be more than 8 characters";
  }
elseif($password!=$password2){
    $error="The passwords don't match";
  }
  elseif(!preg_match('~[0-9]+~', $password)){
    $error="The password should be a mix of words and numbers and should at least contain 1 uppercase letter";
  }
  elseif(!preg_match('/[A-Z]/', $password)){
    $error="The password should contain at least 1 uppercase letter";
  }
  elseif(strlen($password)<8){
    $error="Your password should be more than 8 characters";
  }
else{
  //Escaping characters to prevent SQL injections.
$username=mysqli_real_escape_string($connection,$username);
$password=mysqli_real_escape_string($connection,$password);
$password2=mysqli_real_escape_string($connection,$password2);
$email=mysqli_real_escape_string($connection,$email);
$fullName=mysqli_real_escape_string($connection,$fullName);
//Hashing the password using MD5 algorithm
$password=md5($password);
//Checking if username exists in our database
$checkUniqueUsernameQuery="SELECT username FROM users WHERE username = '$username'";
$resultCheckUnique=mysqli_query($connection,$checkUniqueUsernameQuery);
$countCheck=mysqli_num_rows($resultCheckUnique);
if(mysqli_num_rows($resultCheckUnique) > 0){
    die("This username already exists");

}
else{
 $insertQuery="INSERT INTO users VALUES(NULL,'$username','$password','$email','$fullName')";
   $resultInsertQuery=mysqli_query($connection,$insertQuery);
 }
}
?>