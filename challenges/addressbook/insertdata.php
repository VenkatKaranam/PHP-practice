<?php
//database connection
 $database=mysqli_connect("localhost", "root","","address_book") OR die('Server Error no connection'.mysqli_connect_error());
 //getting input values and storing in php variables
 $fname=$_REQUEST['fn'];
 $lname=$_REQUEST['ln'];
 $address=$_REQUEST['address'];
$phnumber=$_REQUEST['phn'];
$mail=$_REQUEST['mail'];
$altaddress=$_REQUEST['alt'];

 //sql query to insert data in table
 $insert=mysqli_query($database,"insert into address_table values('$fname','$lname','$address','$phnumber','$mail','$altaddress') ");
 if ($insert) {
 	echo'<h1>Address Added</h1><br>
 	<a href="index.html">Home</a>';
 }
 else{
 	//error message if not inserted
 echo'<h1>Data Not Inserted</h1><br>
 	<a href="index.html">Home</a>';
 }
  ?>
