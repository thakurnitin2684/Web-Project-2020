<?php
require 'db.php';
 session_start();

?>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
    <title>User Profile</title>
    </head>

    <?php
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
           if(isset($_POST['blogpost'])){
           require 'postblog.php';
           } 
       }
    ?>
<body style="background-color: #2e5c80;">    


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Blog.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#blogblock">post blog <span class="sr-only">(current)</span></a>
                </li> 
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search Blog" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <div class="container-fluid " style="max-width:1400px;margin-top:90px" >


        <div class="row">
            <!-- Started left column here-->
            <div class="col-sm-3 " >
                <div class="card" >
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title" style=" color: #0ba385  "><?php echo $_SESSION['first_name'] ; echo' ';echo $_SESSION['last_name']?></h5>
                        <p class="card-text">Some information about the user . Information about the user
                        </p>
                        <a href="indexlogin.php" class="btn  btn-primary" >Log out</a>
                    </div>
                </div>
            </div>
               <!-- enden left column-->

               <!-- started middle column-->
            <div class="col-sm-7" id="blogblock">

                <div class="card" >
                   <div class="card-body">  
                       <h6 class="topacity">Post your blog </h6>
                        <form action="profile.php" method="POST">
                        <textarea class="form-control" type="blog" name="blog" id="blog" placeholder="Write here..." rows="5"   autofocus></textarea> 
                     <br>
                       <div class="row">
                          <div class="col-sm-6">                        
                                     <input class="form-control"  name="blogtitle"  placeholder="Blog Title" required>   
                          </div>

                          <div class="col-sm-6">  
                                    <input class="form-control"    name="author" type="author" id="author"   placeholder="author"  required>
                            </div>
                        </div> 
                        <br>
                        <button class="btn btn-primary" type="submit" name="blogpost" id="addblog">Post</button>
                       </form> 
                   </div>
                </div>
     
                  <br>
                  <div id="arr">             </div>   
                  <br>
                
            </div>
        </div>   
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       
<script> 
// function likeincrease(){
//     $.get("like.php", function (data) {
//     });
// }
     function render(blog,author,title,likes){
        // alert(blog+author+title);
        var html = '<div class="card" style="margin-top: 10px"><div class="card-body"><h5 class="card-title" style=" color: #0ba385  ">'+ title +'</h5> <h6 align="right" class="card-title" > By: '+ author +'</h6><p class="card-text">' + blog + '</p> <h6 style="margin-left:10px"><b>'+ likes +'</b></h5><a  class="btn btn-primary">Like</a><br></div></div>';
        $('#arr').append(html);
     }

     $(document).ready(function() {
		    var dt;
            $.get("show.php", function (data) {
            dt =  JSON.parse(data);
            $.each(dt, function(){
                 render(this.body,this.author,this.blogtitle,this.likes);
                // alert(this.body + this.author + this.blogtitle);

            });
            });

     });
 </script>
             
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                    crossorigin="anonymous"></script>
</body>
</html>        
