<?php
//database connection
 $database=mysqli_connect("localhost", "root","","admindb") OR die('Server Error no connection'.mysqli_connect_error());
//getting parameter values 
$uname=$_REQUEST['uname'];
$status=$_REQUEST['status'];
session_start();
if(!isset($_SESSION['username']))
{
	echo "Login first<br>
	<a href='adminlogin.html'>Login</a>";
	die();
}

else{
	// if status is blocked changing to active
	if($status=='Blocked')
	{
		//sql query to change status through username
		$update1=mysqli_query($database,"update admin_table set status='Active' where username='$uname' ");
		if ($update1) {
			//success of query redirects to viewdata.php
			header('location:viewdata.php');
			die();
		}
		else{
			echo"Not Updated";
		}
	}
	// if status is active changing to blocked
	elseif ($status=='Active') {
		//sql query to change status through username
		$update2=mysqli_query($database,"update admin_table set status='Blocked' where username='$uname' ");
		if($update2){
			//success of query redirect to viewdata.php
			header('location:viewdata.php');
			die();
		}
		else{
			echo "Not Updated";
		}
	}

}
?>
