
<?php

$blog=$mysqli->escape_string($_POST['blog']);
$title=$mysqli->escape_string($_POST['blogtitle']);
$athr=$mysqli->escape_string($_POST['author']);

if(isset($blog) AND !empty($blog)){

    $sql="SELECT * FROM content";
    $result = mysqli_query($mysqli,$sql) or die(mysqli_error());
  if($result)
  { $fl = 0;
    while($row=mysqli_fetch_array($result))
    {

        if( $blog===$row['blog']){
          $fl=1;
        }
  
    }
  }
if($fl==0)
{
    $sqlu="insert into content values ('$blog','$title','$athr','0')";
    $mysqli->query($sqlu);
}
}
 
?>
