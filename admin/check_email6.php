<?php
require_once("includes/config.php");
// code user email availablity
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];


	$sql =mysqli_query($conn,"SELECT email FROM lecturer WHERE email='$email'");


if(mysqli_num_rows($sql) > 0)



{
echo "<span style='color:red'>Adm no  already in the record .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{

	echo "<span style='color:green'>Adm no available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}



?>
