
<?php
//database connection mysqli_connect("servername","username","password","databasename")
 $database=mysqli_connect("localhost", "root","","admindb") OR die('Server Error no connection'.mysqli_connect_error());
 //getting input values and storing in php variables
 $uname=$_REQUEST['un'];
 $password=$_REQUEST['pswd'];

//sql query to get particular user data row
 $retrive=mysqli_query($database,"select * from admin_table where username='$uname'");
 //fetching query and storing in php variable
 $user=mysqli_fetch_assoc($retrive);
 //checking status of user
if($user['status']=="Active")
{
	//if user is in active status then checking password
	if($user['password']==$password)
	{
		//startsession and creating session variable to make login period
		session_start();
		$_SESSION['username']=$uname;
		//redirecting to viewdata.php where data of admin user is displayed
		header('location:viewdata.php');
	}
else
{
	//if password not matched
	echo "invalid password";	
}		
}
else{
	//if status is blocked
	echo "Your credentials are Blocked<br>
	<a href='adminlogin.html'>Login</a>";
}

?>
