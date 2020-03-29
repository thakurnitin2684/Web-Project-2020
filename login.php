<?php
require 'db.php';
session_start();
$email=$mysqli->escape_string($_POST['email']);
$result=$mysqli->query("SELECT * FROM users where email='$email'");

if($result->num_rows==0){
    $_SESSION['message']="User with email does not exist!";
    header("location:error.php");

}
else{ //user exists
    $user=$result->fetch_assoc();

    if(password_verify($_POST['password'],$user['password'])){
        $_SESSION['email']=$user['email'];
        $_SESSION['first_name']=$user['first_name'];
        $_SESSION['last_name']=$user['last_name'];

        $_SESSION['logged_in']=true;
        header("location: profile.php");
    }
else{
    $_SESSION['message']="You have entered wrong passworg,try again!";
    header("location: error.php");
}
}
?>