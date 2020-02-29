<?php
$_SESSION['email']=$_POST['email'];
$_SESSION['first_name']=$_POST['firstname'];
$_SESSION['blog']=$_POST['blog'];
$first_name=$mysqli->escape_string($_POST['firstname']);
$blog=$mysqli->($_POST['blog']);
$email=$mysqli->escape_string($_POST['email']);
$sql="insert into content(first_name,last_name,email,password,hash) values ('$first_name','$email','$blog')";
?>