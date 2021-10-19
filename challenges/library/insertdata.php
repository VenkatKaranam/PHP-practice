<?php
//database connection
 $database=mysqli_connect("localhost", "root","","library_db") OR die('Server Error no connection'.mysqli_connect_error());
 //getting input values and storing in php variables
 $name=$_REQUEST['id'];
 $id=$_REQUEST['name'];
 //sql query to insert data in table
 $insert=mysqli_query($database,"insert into books_table values('$name','$id') ");
 if ($insert) {
 	echo'<h1>Data Inserted</h1><br>
 	<a href="index.html">Home</a>';
 }
 else{
 	//error message if not inserted
 echo'<h1>Data Not Inserted</h1><br>
 	<a href="index.html">Home</a>';
 }
  ?>
