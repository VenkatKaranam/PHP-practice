<?php 
$database=mysqli_connect("localhost","root","","personsdb")OR die('Server Error no connection'.mysqli_connect_error());//database connection

//input values are retrived and stored in php
$n=$_REQUEST['name'];
$w=$_REQUEST['w'];
$g=$_REQUEST['gender'];
$retrivewsq=mysqli_query($database,"select * from wilayat where wilayatname='$w'"); //sql query to get wilayat id and name from wilayat table
$fetchwilayat=mysqli_fetch_assoc($retrivewsq);
$wsq=$fetchwilayat['wsq']; //wilayat id stored
$retrive=mysqli_query($database,"select * from persons_table where prname='$n' and prwilayatsq='$wsq' and prgender='$g' "); //sql query to retrive data through person name and gender and wilayat id

if($retrive)
{
		
		if (mysqli_num_rows($retrive)==0) {echo 'no data found';} //if no data with name of person
		else{
			//displaying search data in table format
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
				<td>".$fetchwilayat['wilayatname']."</td>
				</tr></table>";
			}
		}
}
else{
	echo'retrived fail';
}
echo '<a href="addperson.html">Add new person</a>'; //link to add person form


 ?>
