<?php
require 'db.php';
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     if(isset($_POST['login'])){
         require 'login.php';
     }
     elseif (isset($_POST['register'])) {
         require 'register.php';
     }
 }
?>
<body class="text-center">
    <form class="form-signin" action="indexsignup.php" method="POST" autocomplete="off">
        <img class="mb-4" src="images.png" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"> Sign up</h1>
        <input type="fname" name="firstname" class="form-control" placeholder="First Name" autofocus>
        <input type="lname" name="lastname" class="form-control" placeholder="Last Name">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
        <input type="password" id="inputPassword" class="form-control" name="password"  placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Sign up</button>
        <div class="checkbox mb-3">
            <button onClick="location.href='indexlogin.php'" type="submit" class="btn  btn-link  btn-sm ">Already
                Registered?Log
                in</button>
        </div>
    </form>
</body>

</html>