<?php 
$database=mysqli_connect("localhost", "root","","address_book") OR die('Server Error no connection'.mysqli_connect_error());
//getting values from form 
 $fname=$_REQUEST['fn'];
 $lname=$_REQUEST['ln'];
 $address=$_REQUEST['address'];
$phnumber=$_REQUEST['phn'];
$mail=$_REQUEST['mail'];
$altaddress=$_REQUEST['alt'];
//sql query to update selected data from table
$delete=mysqli_query($database,"update address_table set lastname='$lname',address='$address',phonenumber='$phnumber',email='$mail',alternateaddress='$altaddress' where firstname='$fname'");
if ($delete) {
	echo'<h1>Data Updated</h1><br>
	<a href="index.html">Home</a>';

}
else {
	//eeror message
	echo'<h1>Data not Updated</h1><br>
	<a href="updateaddress.html">Update date</a>';
}
 ?>