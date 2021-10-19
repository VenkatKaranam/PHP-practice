<?php
//database connection established
$database=mysqli_connect("localhost", "root","","yourname_sapid") OR die('Server Error no connection'.mysqli_connect_error());
//getting user input name  and storing into php variable
$name=$_POST['name']; 
if ($name=="") {
	echo 'Entered nothing';
	die();
}
	//sql query to retrive data from table through name 
	$result= mysqli_query($database,"Select * from yourname_sapid_wp where name='$name'");
	//getting number of rows in query
	
	$rows=mysqli_num_rows($result);
		if ($result) {
			//if number of rows is 0 mean no such name data in the database  
			if($rows==0)
			{
				echo 'nothing found with the name';
				die();
			}
			//displaying search data in table format
			echo "<br><h1>Result</h1>
			<table width='900px' border='2px solid black'> 
					<tr>
						<th>Name</th>
						<th>SAPId</th>
						<th>Semester</th>
						<th>Email</th>
						<th>Father Name</th>
						<th>Address</th>
						<th>Mobile Number</th>
					</tr>";   
			//fetching rows data and printing in table rows
			while ($fetch=mysqli_fetch_assoc($result)){   
			echo "<tr>
				<td>".$fetch['name']."</td>
				<td>".$fetch['sapid']."</td>
				<td>".$fetch['semester']."</td>
				<td>".$fetch['email']."</td>
				<td>".$fetch['fathername']."</td>
				<td>".$fetch['homeaddress']."</td>
				<td>".$fetch['mobilenumber']."</td>
				</tr>";
			}
		}

echo"</table>";
  ?>
