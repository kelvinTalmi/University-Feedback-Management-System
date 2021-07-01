<?php

include ("includes/config.php");
$delete=$_GET['id'];


$result=mysqli_query($conn,"DELETE FROM users where id=$delete");

if($result)
{

header('location:student_list.php');

}







?>