<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Data</title>
	<!-- external css file link -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$database=mysqli_connect("localhost", "root","","admindb") OR die('Server Error no connection'.mysqli_connect_error());

//checking session of login
session_start();
if(!isset($_SESSION['username']))
{
	// if not logged in
	echo "Login first<br>
	<a href='adminlogin.html'>Login</a>";
}

//sql query to retriev over all table of admin_table
$admindata=mysqli_query($database,"select * from admin_table");
			//getting number of rows in query
			$rows=mysqli_num_rows($admindata);
			//if number of rows is 0 mean no data in the database
			if($rows==0)
			{
				echo 'No records found in the table';
				die();
			}
				//displayingdata in table format
			echo "<br><center><h1>ADMIN USER</h1>
			<table width='900px' border='2px solid black'> 
					<tr>
						<th>USERNAME</th>
						<th>PASSWORD</th>
						<th>STATUS</th>
						<th>Action</th>
					</tr>";   
					
			//fetching rows data and printing in table rows
			//find anchor tag below to change the action of selected row
			while ($fetch=mysqli_fetch_assoc($admindata)){   
			echo "<tr>
				<td>".$fetch['username']."</td>
				<td>".$fetch['password']."</td>
				<td>".$fetch['status']."</td>";
				//displaying button for blocked admin
				if($fetch['status']=="Blocked")
				{
					//sending username and status as parameters to link action.php
					echo "<td><a class='activebtn' href='action.php?uname=".$fetch['username']."& status=".$fetch['status']."'>Active</a></td>
				</tr>";
				}
				//displaying button for active admin
				else{
					echo "<td><a class='blockbtn' href='action.php?uname=".$fetch['username']."& status=".$fetch['status']."'>Block</a></td>
				</tr>";
				}
			
			
		}
		//button to logout
		echo "</table>
		<br><a href='logout.php'>LOGOUT</a></center>" ;
 ?>
 </body>
</html>