<?php 
$database=mysqli_connect("localhost","root","","personsdb")OR die('Server Error no connection'.mysqli_connect_error()); //database connection

//input values are retrived and stored in php
$n=$_REQUEST['name'];
$s=$_REQUEST['salary'];
$b=$_REQUEST['dob'];
$w=$_REQUEST['w'];
$g=$_REQUEST['gender'];
if ($w=='Nizwa') { //to wilayatsq values
	$wsq=1;
}
elseif ($w=='izki') {
	$wsq=2;
}
else
{
	$wsq=3;
}
//sql query to add the persons details into database
$insert=mysqli_query($database,"insert into persons_table(prname,prsalary,prdob,prgender,prwilayatsq)  
	values('$n','$s','$b','$g','$wsq')");
if($insert)
{ 
	//if inserted, data will be retrived and displayed
	$retrive=mysqli_query($database,"select * from persons_table"); //sql query to retrive all row of persons table
		if ($retrive) {
			echo "<table width='500px' border='2px solid black'>
					<tr>
						<th>Person Id</th>
						<th>Persons name</th>
						<th>Salary</th>
						<th>Birth data</th>
						<th>Gender</th>
						<th>Wilayat Id</th>
					</tr>";   
			while ($fetch=mysqli_fetch_assoc($retrive)){   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$fetch['prid']."</td>
				<td>".$fetch['prname']."</td>
				<td>".$fetch['prsalary']."</td>
				<td>".$fetch['prdob']."</td>
				<td>".$fetch['prgender']."</td>
				<td>".$fetch['prwilayatsq']."</td>
				</tr>";
			}
		}
		$retrivewsq=mysqli_query($database,"select * from 	wilayat"); //sql query to retrive all row of wilayat table
		if ($retrive) {
			echo "<table width='500px' border='2px solid black'>
					<tr>
						<th>Wilayat Id</th><th>Wilayat name</th>
					</tr>";   
			while ($fetch=mysqli_fetch_assoc($retrivewsq)){   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$fetch['wsq']."</td>
				<td>".$fetch['wilayatname']."</td>
					</tr>";
			}
		}
}
else{
	echo'Not Added';
}
echo '</table><a href="addperson.html">Add new person</a>'; //link to redirect add person form


 ?>
