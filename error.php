<?php
session_start();
?>
<html>
    <head>
        <title>Error</title>
    </head>
<body>    
<div >
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
        <a href="indexlogin.php"> <button class="button "> Home</button></a>
        <div>
    </body>
    </html>        
