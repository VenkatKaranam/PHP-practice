<?php
$link=mysqli_connect("localhost", "root","","employeedb") OR die('Server Error no connection'.mysqli_connect_error()); //database connection through xampp server ,username,password,db name 
//include the require here
require('input.html');
$lookup=$_POST["keyword"];
if ($lookup=="") {
	echo 'entered nothing';
	die();
}
else{


if ($lookup=="*"){ //if input is *
	$query= 'Select * from tech3740_employee'; //sql query to retrive whole data is retrived

}
else{
	$query = ' Select * from tech3740_employee where address like "%' . $lookup . '%" ' ; // sql query only row of data retrived respective input address

		}

$result = mysqli_query($link,$query); //data store in php variable
$workerstotal=mysqli_num_rows($result); //num of rows in db table 

if ($result) {

	if ($workerstotal==0 ) {

	echo 'No records in the database for the keyword:'.$lookup ; //if no data is presented in table 

	die();		

	}
	else{
		echo "There are " .$workerstotal. " employee(s) in the database. ";
		$around=0; 
		
		//main modification made in given code data is displayed in table format using html tags, html tags can be embedded into php code through echo
		echo "<table style='margin-top:50px;' width='900px' border='2px solid black'> 
					<tr>
						<th>id</th>
						<th>Login</th>
						<th>Password</th>
						<th>Name</th>
						<th>Role</th>
						<th>gender</th>
						<th>Salary</th>
						<th>Address</th>
					</tr>";   
			while ($linea=mysqli_fetch_assoc($result)){
			$around+=$linea ["salary"];   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$linea['employee_id']."</td>
				<td>".$linea['login']."</td>
				<td>".$linea['password']."</td>
				<td>".$linea['name']."</td>
				<td>".$linea['role']."</td>";
				if ($linea['gender']=='F') {  //another modification while all rows of data is displaying check gender through if condition and apply style respectively

					echo "<td style='color:red;'>".$linea['gender']."</td>";
					
				}
				else{
					echo "<td style='color:blue;'>".$linea['gender']."</td>";
				}
				if($linea['salary']==''){ //checking salary whether values is null
					$workerstotal=$workerstotal-1; //if salary is null decrement total employees to get perfect average  
					echo "<td style='color:red;'>Null</td>";
					}
				else{
					echo"<td>".$linea['salary']."</td>";
					}

				echo"<td>".$linea['address']."</td>

				</tr>";
			}
			echo "</table>Average salary:".number_format(($around)/$workerstotal,1); //displaying average and formated decimal round to 1 using numberformat() function

		}

	}
}

  ?>