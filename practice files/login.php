<?php 

$database=mysqli_connect("localhost","root","","plantstoreDB"); //database connection is established 

if($database)
{
	$username=$_REQUEST['user']; //retriving user inputs through their names
	$password=$_REQUEST['pass'];
	$registration_no=uniqid(); //giving uniqid as registration no 

	$retrive=mysqli_query($database,"select password from tbluser where email='$username'"); // sql query to retriving data from tbluser table with user email
		if(mysqli_num_rows($retrive)==0){ //if there is no data in table with entered email
			echo 'Invalid User'; 
		}
		else{
			$fetch=mysqli_fetch_assoc($retrive); //fetching data to fetch variable
				if($password==$fetch['password']){  //checking whether entered password matches actual password
				session_start();            //starting session
				$_SESSION['user']=$username; //email is stored in session variable
				$_SESSION['reg_no']=$registration_no; //registration no stored in session variable
				header('location:plantstore.html');
				}
				else{
					echo "Invalid password";
				}
		
	}
}

 ?>
