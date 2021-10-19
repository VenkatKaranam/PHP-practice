<?php 
$database=mysqli_connect("localhost","root","","plantstoreDB"); //database connection
if($database)
{
		$plantcategory=$_REQUEST['pc'];
		$plantname=$_REQUEST['pn'];
		$plantsize=$_REQUEST['ps']." inch";
		$plantprice=intval($_REQUEST['pp']); //changing string to float value
		$plantdescription=$_REQUEST['pd'];
		$insert=mysqli_query($database,"insert into tblplant(	plantcategory,plantname,plantsize,plantprice,plantdescription) values('$plantcategory','$plantname','$plantsize','$plantprice','$plantdescription') "); //inserting form data into tblplant table
		if($insert)
		{
			$retrive=mysqli_query($database,"select *from tblplant"); //retriving all rows 
			if ($retrive) {
			echo "<table style='margin-top:50px;' width='900px' border='2px solid black'>
					<tr>
						<th>id</th>
						<th>plantcategory</th>
						<th>plantname</th>
						<th>plantsize</th>
						<th>plantprice</th>
						<th>plantdescription</th>
					</tr>";   
			while ($fetch=mysqli_fetch_assoc($retrive)){   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$fetch['plantid']."</td>
				<td>".$fetch['plantcategory']."</td>
				<td>".$fetch['plantname']."</td>
				<td>".$fetch['plantsize']."</td>
				<td>".$fetch['plantprice']."</td>
				<td>".$fetch['plantdescription']."</td>

				</tr>";
			}
		}
		
		}
		else{
			echo 'not inserted';
		}
	}
	else{
		header('location:index.html');
}
else{echo'database not connected ';}

echo '<br><a style="text-decoration: none;
		padding: 10px;
		background-color:green;
		color: white;
		border-radius: 5px;" href="logout.php">Logout</a> 

		<a style="text-decoration: none;
		padding: 10px;
		background-color:green;
		color: white;
		margin-left:20px
		border-radius: 5px; href="addplant.html">Add Plant</a>' ; //logout link and add plant link
 ?>