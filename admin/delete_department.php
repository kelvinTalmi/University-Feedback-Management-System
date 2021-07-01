<?php

include ("includes/config.php");
$delete=$_GET['id'];


$result=mysqli_query($conn,"DELETE FROM department where id=$delete");

if($result)
{

header('location:department_list.php');

}







?>