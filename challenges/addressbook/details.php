<?php
//database connection
$database=mysqli_connect("localhost", "root","","address_book") OR die('Server Error no connection'.mysqli_connect_error());
//getting name from link
$fname=$_REQUEST['name'];
//sql query to get data by  name
$retrieve=mysqli_query($database,"Select * from address_table where firstname='$fname'");
$fetch=mysqli_fetch_assoc($retrieve);
//data is displaying table format
echo "<br><h1>Display Data</h1>
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

?>