<?php 
$database=mysqli_connect("localhost", "root","","yourname_sapid") OR die('Server Error no connection'.mysqli_connect_error());
//getting name from the link
$name=$_GET['name'];
//sql query to delete selected data from table
$delete=mysqli_query($database,"delete from yourname_sapid_wp where name='$name'");
if ($delete) {
	echo'<h1>Data Deleted</h1><br>
	<a href="searchinput.html">Home</a>';

}
 ?>