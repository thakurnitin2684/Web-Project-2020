<?php
   require 'db.php';

$sql="SELECT * FROM content";
$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
$test=array();
if($result)
{
    while($row=mysqli_fetch_array($result))
    {

        // echo $row['blog'] ;
        // $array[] = array('UserID'=> $row['UserID'], 'EmailAddr'=> $row['EmailAddr']);
        $test[] = array('body'=> $row['blog'],'author'=> $row['author'],'blogtitle'=> $row['blogtitle'],'likes'=> $row['likes']);

    }
}
echo json_encode($test);

?>

