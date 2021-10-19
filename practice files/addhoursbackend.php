<html>
<head>
	<meta charset="utf-8">
	<title>History</title>
</head>
<style type="text/css">
.footer{
	position: relative;
	top: 500px;
}
</style>
<body>
<!--in php, html code can be written in echo statement note:file should be saved .php -->
<?php
$database=mysqli_connect("localhost","root","","restaurant"); //database connection
if($database)
{ 
	$date=$_REQUEST['date'];  //retriving admin inputs through name given in respective html tags
	$timings=$_REQUEST['t1']." To ".$_REQUEST['t2']; //concating open hours
	$displaystatus=$_REQUEST['ds'];
	if($displaystatus=='y' || $displaystatus=='n')
	{

		$insert=mysqli_query($database,"insert into openhours(date,timings,displaystatus) values('$date','$timings','$displaystatus')"); //inserting admin inputs in database table
		if($insert)
		{
			$retrive=mysqli_query($database,"select *from openhours"); //retriving all rows 
			if ($retrive) {
			echo "<h1 style='color:skyblue;'>History of openhours</h1><table style='margin-top:50px;' width='900px' border='2px solid black'>
					<tr>
						<th>Date</th>
						<th>Timings</th>
					</tr>";   
			while ($fetch=mysqli_fetch_assoc($retrive)){   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$fetch['date']."</td>
				<td>".$fetch['timings']."</td>
				</tr>";
			}
			
		}

		}
	}
	else{
		echo 'enter displaystatus Y/N';
	}
	
}
 ?>
<div class=footer><a href="addhours.php">Add hours</a>
			<?php include 'footer.php';  ?>  <!-- footer page included -->
		</div>

</body>
</html>