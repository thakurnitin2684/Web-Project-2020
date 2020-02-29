<?php
session_start();
?>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Profile</title>
   <link href="style.css" rel="stylesheet">

    </head>

    <?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     if(isset($_POST['postblog'])){
         require 'postblog.php';
     }
 }
?>
<body>    


<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <div class="container-fluid" style="max-width:1400px;margin-top:90px">


        <div class="row">
            <!-- Started left column here-->
            <div class="col-sm-3">
                <div class="card">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION['first_name'] ; echo' ';echo $_SESSION['last_name']?></h5>
                        <p class="card-text">Some information about you you are this and this and this
                        </p>
                        <a href="indexlogin.php" class="btn btn-primary">Log out</a>
                    </div>
                </div>
            </div>
            <!-- enden left column-->

            <!-- started middle column-->
            <div class="col-sm-6">

    
             <div class="card">
               <div class="card-body">  
                   <h6 class="topacity">Post your blog </h6>
                   <textarea class="form-control" type="blog" name="blog" placeholder="Write here..." rows="5"  autofocus></textarea>
                   <br>
                   <button class="btn btn-primary" type="submit" name="postblog">Post</button>
          </div>
        </div>
     
    
     
                <div class="card">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Blog 1</h5>
                        <p class="card-text">Some information about the blog. a small summary or anuthing Some
                            information about the blog. a small summary or anuthing Some information about the blog. a
                            small summary or anuthing
                        </p>
                        <a href="#" class="btn btn-primary">Like</a>
                        <a href="#" class="btn btn-primary">Comment</a>
                    </div>
                </div>

                <div class="card" style="margin-top: 10px;">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Blog 2</h5>
                        <p class="card-text">Some information about the blog. a small summary or anuthing Some
                            information about the blog. a small summary or anuthing Some information about the blog. a
                            small summary or anuthing
                        </p>
                        <a href="#" class="btn btn-primary">Like</a>
                        <a href="#" class="btn btn-primary">Comment</a>
                    </div>
                </div>

                <div class="card" style="margin-top: 10px;">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Blog 3</h5>
                        <p class="card-text">Some information about the blog. a small summary or anuthing Some
                            information about the blog. a small summary or anuthing Some information about the blog. a
                            small summary or anuthing
                        </p>
                        <a href="#" class="btn btn-primary">Like</a>
                        <a href="#" class="btn btn-primary">Comment</a>
                    </div>
                </div>

                <div class="card" style="margin-top: 10px;">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Blog 4</h5>
                        <p class="card-text">Some information about the blog. a small summary or anuthing Some
                            information about the blog. a small summary or anuthing Some information about the blog. a
                            small summary or anuthing
                        </p>
                        <a href="#" class="btn btn-primary">Like</a>
                        <a href="#" class="btn btn-primary">Comment</a>
                    </div>
                </div>




            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                    crossorigin="anonymous"></script>
            <!--        <a href="indexlogin.php"> <button class="button"> Home</button></a> -->        
</body>
    </html>        
