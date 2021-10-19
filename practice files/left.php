<?php
$database=mysqli_connect("localhost","root","","control_interface"); 
if($database)
{
	echo "<h1 > L </h1>";
}
else{
	echo "database not connected";
 }
 ?>
