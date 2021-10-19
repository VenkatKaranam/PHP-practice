<?php 
$database=mysqli_connect("localhost", "root","","library_db") OR die('Server Error no connection'.mysqli_connect_error());
//getting name from the link
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
//sql query to update selected data from table
$delete=mysqli_query($database,"update books_table set bookname='$name' where bookid='$id'");
if ($delete) {
	echo'<h1>Data Updated</h1><br>
	<a href="index.html">Home</a>';

}
else {
	//eeror message
	echo'<h1>Data not Updated</h1><br>
	<a href="updatedate.html">Update date</a>';
}
 ?>