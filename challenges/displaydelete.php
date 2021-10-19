<?php
$database=mysqli_connect("localhost", "root","","yourname_sapid") OR die('Server Error no connection'.mysqli_connect_error());
	//sql query to retrive overall data from table
	$result= mysqli_query($database,"Select * from yourname_sapid_wp");
	//getting number of rows in query
	$rows=mysqli_num_rows($result);
		if ($result) {
			//if number of rows is 0 mean no data in the table
			if($rows==0)
			{
				echo 'nothing found with the name';
				die();
			}
			//displaying search data in table format
			echo "<br><h1>Delete Selected Data</h1>
			<table width='900px' border='2px solid black'> 
					<tr>
						<th>Name</th>
						<th>SAPId</th>
						<th>Semester</th>
						<th>Email</th>
						<th>Father Name</th>
						<th>Mobile Number</th>
					</tr>";   
			//fetching rows data and printing in table rows
				//observer the last anchor tag, it is to provide delete button to all rows 
				//in anchor tag name is sending with the link
			while ($fetch=mysqli_fetch_assoc($result)){   
			echo "<tr>
				<td>".$fetch['name']."</td>
				<td>".$fetch['sapid']."</td>
				<td>".$fetch['semester']."</td>
				<td>".$fetch['fathername']."</td>
				<td>".$fetch['homeaddress']."</td>
				<td>".$fetch['mobilenumber']."</td>
				<td><a href='deletedata.php?name=".$fetch['name']."'>Delete</a></td>
				</tr>";
			}
		}echo"</table>";
  ?>
