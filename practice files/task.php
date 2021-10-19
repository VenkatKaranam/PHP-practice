<?php
	$database=mysqli_connect("localhost","root","","hosipital"); //database connection established 
	if($database)
	{
		echo 'Database Connected'; //connection message

		$Selection=$_REQUEST['selected_option']; //data retrive from userform.html
		$fee=$_REQUEST['fee'];
		if ($Selection=='View based on Fee') { 
			selecteddoctors($fee);  //call function if user selected frr based
		}
		if ($Selection=='View All Doctors') {
			alldoctors();   //call function if user select all doctors

		}

	}
	else{
		echo 'Database not connected'; //error message if database not connected
	}

	function alldoctors() //all doctors function
	{
		$database=mysqli_connect("localhost","root","","hosipital");
		$retrive=mysqli_query($database,"select * from doctors"); //sql query to retrive all row of table
		if ($retrive) {
			echo "<table width='500px' border='2px solid black'>
					<tr>
						<th>practice number</th>
						<th>Doctor Name</th>
						<th>specality</th>
						<th>fee</th>
					</tr>";   
			while ($fetch=mysqli_fetch_assoc($retrive)){   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$fetch['practicenumber']."</td>
				<td>".$fetch['doctorname']."</td>
				<td>".$fetch['specality']."</td>
				<td>".$fetch['fee']."</td>

				</tr>";
			}
		}
	}


	function selecteddoctors($value) //selected doctors function
	{
		$database=mysqli_connect("localhost","root","","hosipital");
		$retrive=mysqli_query($database,"select * from doctors where fee< $value"); //sql query to retrive selected doctors
		if ($retrive) {
			echo "<table width='500px' border='2px solid black'>
					<tr>
						<th>practice number</th>
						<th>Doctor Name</th>
						<th>specality</th>
						<th>fee</th>
					</tr>";
			while ($fetch=mysqli_fetch_assoc($retrive)){
			echo "<tr>
				<td>".$fetch['practicenumber']."</td>
				<td>".$fetch['doctorname']."</td>
				<td>".$fetch['specality']."</td>
				<td>".$fetch['fee']."</td>

				</tr>";
			}
		}
	}
  ?>