<?php
include 'connect.php';
if(isset($_GET['removedid']))
{
    $id=$_GET['removedid'];

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       // echo "Removed Successfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con)); 
    }
}
?>