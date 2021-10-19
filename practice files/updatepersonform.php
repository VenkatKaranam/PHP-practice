<?php 
$database=mysqli_connect("localhost","root","","personsdb")OR die('Server Error no connection'.mysqli_connect_error());//database connection

//input values are retrived and stored in php
$n=$_REQUEST['name'];
$bt=$_REQUEST['blood'];
$b=$_REQUEST['dob'];
$w=$_REQUEST['w'];
$g=$_REQUEST['gender'];
if ($w=='Nizwa') {
	$wsq=1;
}
elseif ($w=='izki') {
	$wsq=2;
}
else
{
	$wsq=3;
}
$update=mysqli_query($database,"update persons_table set prbloodtype='$bt',prdob='$b' ,
	prgender='$g',prwilayatsq='$wsq' where prname='$n' "); //sql query to update data with person name
if($update)
{
	$retrive=mysqli_query($database,"select * from persons_table"); //sql query to retrive all row of person table
		if ($retrive) {
			echo "<table width='500px' border='2px solid black'>
					<tr>
						<th>Person Id</th>
						<th>Persons name</th>
						<th>Blood Type</th>
						<th>Birth data</th>
						<th>Gender</th>
						<th>Wilayat Id</th>
					</tr>";   
			while ($fetch=mysqli_fetch_assoc($retrive)){   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$fetch['prid']."</td>
				<td>".$fetch['prname']."</td>
				<td>".$fetch['prbloodtype']."</td>
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
	echo'Not updated';
}
echo '</table><a href="addperson.html">Add new person</a>';


 ?>
