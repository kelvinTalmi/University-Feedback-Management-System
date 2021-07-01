<?php

include ("includes/config.php");
$delete=$_GET['id'];


$result=mysqli_query($conn,"DELETE FROM courses where id=$delete");

if($result)
{

header('location:course_list.php');

}







?>