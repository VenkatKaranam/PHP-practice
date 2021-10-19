<?php
//database connection
$database=mysqli_connect("localhost", "root","","library_db") OR die('Server Error no connection'.mysqli_connect_error());
//sql query to get all rows or data
$result= mysqli_query($database,"Select * from books_table");
	if ($result) {  
		//getting number of rows in query
		$rows=mysqli_num_rows($result);
		//if number of rows is 0 mean no data in the database
			if($rows==0)
			{
				echo 'No records found the table';
				die();
			}
			//displayingdata in table format
			echo "<br><h1>Display Data</h1>
			<table width='900px' border='2px solid black'> 
					<tr>
						<th>Book Id</th>
						<th>Book Name</th>
					</tr>";   
			//fetching rows data and printing in table rows
			//find anchor tag below to delete selected row
			while ($fetch=mysqli_fetch_assoc($result)){   
			echo "<tr>
				<td>".$fetch['bookid']."</td>
				<td>".$fetch['bookname']."</td>
				<td><a href='deletedata.php?id=".$fetch['bookid']."'>Delete</a></td>
				</tr>";
			}
		}

echo"</table><br>
<a href='insertinput.html'>Insert Data</a><br>
		<a href='updateinput.html' >Update Data</a><br>
		<a href='deleteinput.html' >Delete Data</a>";

  ?>