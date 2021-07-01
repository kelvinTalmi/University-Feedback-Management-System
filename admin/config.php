<?php
$servername="localhost";
$user="root";
$password="";
$database="feedback";

$conn=mysqli_connect($servername,$user,$password,$database);

if(!$conn){

echo "no connection made".mysqli_connect_error();


}

?>
