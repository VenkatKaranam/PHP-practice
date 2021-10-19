<?php
$database=mysqli_connect("localhost", "root","","address_book") OR die('Server Error no connection'.mysqli_connect_error());
//getting searchby (table column name) and values
$searchby=$_REQUEST['searchby'];
$input=$_REQUEST['input'];

//sql query to retrieve data from table 
$search=mysqli_query($database,"select * from address_table where `$searchby`='$input'");

//displaying data in table format
if($search){
	$fetch=mysqli_fetch_assoc($search);
echo "<br><h1>Search result</h1>
			<table width='900px' border='2px solid black'> 
					<tr>
						<th>First name</th>
						<th>Last Name</th>
						<th>Address</th>
						<th>Phone Numbers</th>
						<th>Email</th>
						<th>Alternative Address</th>
					</tr>";     
			echo "<tr>
				<td>".$fetch['firstname']."</td>
				<td>".$fetch['lastname']."</td>
				<td>".$fetch['address']."</td>
				<td>".$fetch['phonenumber']."</td>
				<td>".$fetch['email']."</td>
				<td>".$fetch['alternateaddress']."</td>
				</tr>";
			echo'</table>
			 	<a href="index.html">Home</a>';
}

?>
 