<?php
//here html form file(input.html) is embedded in to php file so that input field appears top and result down (like search engine)
include 'input.html';
//if form data not received
//database connection through xampp server ,username,password,db name 
$database=mysqli_connect("localhost", "root","","order") OR die('Server Error no connection'.mysqli_connect_error()); 
//name from input.html is stored in php variable
$name=$_POST['keyword']; 
if ($name=="") {
	echo 'Entered nothing';
	die();
}
	//sql query to retrive data from table through name 
	$result= mysqli_query($database,"Select * from customer_info where customername='$name'");
	//getting number of rows in query
	$rows=mysqli_num_rows($result);
		if ($result) {
			//if number of rows is 0 mean no such customer in the database  
			if($rows==0)
			{
				echo 'nothing found with the name';
				die();
			}
			//displaying search data in table format
			echo "<br><h1>Result</h1>
			<table width='500px' border='2px solid black'> 
					<tr>
						<th>Costumer Id</th>
						<th>Customer name</th>
						<th>City</th>
						<th>Grade</th>
						<th>Salesman Id</th>
					</tr>";   
			//fetching rows data and printing in table rows
			while ($fetch=mysqli_fetch_assoc($result)){   
			echo "<tr>
				<td>".$fetch['customerid']."</td>
				<td>".$fetch['customername']."</td>
				<td>".$fetch['city']."</td>
				<td>".$fetch['grade']."</td>
				<td>".$fetch['salesmanid']."</td>
				</tr>";
			}
		}

echo"</table>";
?>