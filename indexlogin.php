<?php
require 'db.php';
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Login</title>

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
    <form class="form-signin" action="indexlogin.php" method="POST" autocomplete="off">
        <img class="mb-4" src="images.png" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"> Log in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Log in</button>
        <div class="checkbox mb-3">
            <button type="button" class="btn btn-link btn-sm">Forgot Password?</button>
            <button onClick="location.href='indexsignup.php'" type="submit" class="btn  btn-link ">New
                here?Sign up</button>
        </div>
    </form>
</body>

</html>