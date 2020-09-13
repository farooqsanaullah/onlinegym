<?php 

$service_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "onlinegym";  // db--> database

$con = mysqli_connect($service_name,$user_name,$password,$db_name);
if(!$con)
{
    echo "<script> alert('Not connection'); </script>";
}








?>