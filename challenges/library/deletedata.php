<?php 
$database=mysqli_connect("localhost", "root","","library_db") OR die('Server Error no connection'.mysqli_connect_error());
//getting id
$id=$_REQUEST['id'];
//sql query to delete selected data from table
$delete=mysqli_query($database,"delete from books_table where bookid='$id'");
if ($delete) {
	echo'<h1>Data Deleted</h1><br>
	<a href="index.html">Home</a>';

}
else{
	//error message if not deleted
	echo'<h1>Data Not Deleted</h1><br>
	<a href="deletedata.html">Deletedata</a>';
}
 ?>
