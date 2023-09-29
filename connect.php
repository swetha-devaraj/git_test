<?php

$con= new mysqli('localhost','root','','my_db');

if(!$con){
    die(mysqli_error($con));
}



?>