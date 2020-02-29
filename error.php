<?php
session_start();
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Error</title>

          <!-- Bootstrap core CSS -->
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <link href="style.css" rel="stylesheet">
    </head>
<body class="text-center">    
<div class="form-signin" >
    <h1>ERROR</h1>
    <p>
        <?php
        if(isset($_SESSION['message']) AND !empty($_SESSION['message'])):
            echo $_SESSION['message'];
        else:
            header("location :index.php");
        endif;
        ?>
        </p>
     <button class="btn btn-lg btn-primary btn-block" onClick="location.href='indexlogin.php'"> Back to login</button>
        <div>
    </body>
    </html>        
