<?php

$database=mysqli_connect("localhost", "root","","constructco") OR die('Server Error no connection'.mysqli_connect_error());
if(isset($_REQUEST['assign_num']))
{
	//getting assign number from link
$assign_num=$_REQUEST['assign_num'];
}
//sql query to delete particular record
$delete=mysqli_query($database,"delete from assignment where ASSIGN_NUM='$assign_num' ");
if($delete)
{
	echo'<h2>assignment deleted</h2>';
}
else{
	echo'<h2>assignment Not deleted</h2>';
}
echo' <h2><br> <a href="projectsdisplay.php">Projects</a></h2>';