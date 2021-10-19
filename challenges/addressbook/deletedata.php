<?php 
$database=mysqli_connect("localhost", "root","","address_book") OR die('Server Error no connection'.mysqli_connect_error());
//getting all row of data to $retrieve variable
$retrieve=mysqli_query($database,'select * from address_table');
//from the query getting number of rows in the table
$rows=mysqli_num_rows($retrieve);
//running for loop for number rows times 
for($i=1;$i<=$rows;$i++){
	//here i is the name given in html input tag
	//if i is checked respective i data will be deleted
	if(isset($_REQUEST[$i])){
	$fname=$_REQUEST[$i];
	echo "<h3>".$fname."</h3>";
	//sql query to  delete data from table
	$delete=mysqli_query($database,"delete from address_table where firstname='$fname'");
}
}
echo'<h1>Data Deleted</h1><br>
<a href="index.html">Home</a>';

 ?>
