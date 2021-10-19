<?php
//database connection
$database=mysqli_connect("localhost", "root","","address_book") OR die('Server Error no connection'.mysqli_connect_error());
//sql query to get all rows or data
$result= mysqli_query($database,"Select * from address_table");
	if ($result) {  
		//getting number of rows in query
		$rows=mysqli_num_rows($result);
		//if number of rows is 0 mean no data in the database
			if($rows==0)
			{
				echo 'No records found the table';
				die();
			}
			//displayingdata in list format
			echo "<br><h1>View address list </h1>
			<ul> 
					<h2>
						<th>Names</th>
					</h2>";   
			//fetching rows data and printing in list
			//find anchor tag below to display details of particular name
			while ($fetch=mysqli_fetch_assoc($result)){   
			echo "<h3>
				<li>
				<a href='details.php?name=".$fetch['firstname']."'>".$fetch['firstname']."</a></td>
				</li>
				</h3>";
			}
		}

echo"<br>
<a href='index.html'>Home</a><br>";

  ?>