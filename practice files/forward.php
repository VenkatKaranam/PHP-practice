<?php
$database=mysqli_connect("localhost","root","","control_interface"); //after database created in phpmyadmin connection is established through query
if($database)
{
	echo "<h1 > F </h1>";
}
else{
	echo "database not connected";
 }
 ?>
