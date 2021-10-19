
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	<title>Sign in</title>
	<body>
	<center>
<?php 
$Message="";
$flagclass="";
$username="";
$password="";
//database connection
 $database=mysqli_connect("localhost", "root","","accounts_db") OR die('Server Error no connection'.mysqli_connect_error());
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$username=$_POST['user'];
	$password=$_POST['pass'];

	if (isset($_POST['Submit'])) {
		if (empty($username)) {
			$Message="Name is required";
		}
		else if (empty($password)) {
			$Message="password is required";
		}
		//sql query to get the user data 
		$retrieve=mysqli_query($database,"select * from users_table where username='$username'");
		$fetch=mysqli_fetch_assoc($retrieve);
		//checking user entered password with database password
		if($username==$fetch['username'])
		{
			if ($password==$fetch['password']) {
				$Message='Access Granted';
				$flagclass="success";
			}
			else
			{
				$Message='Access Denied';
				$flagclass="error";
			}

		}
		else
		{
			$Message='Access Denied';
			$flagclass="error";
		}

	}

}

 ?>


		<form method="POST"  action="signin.php"> <!--sending user email and password to login.php through method POST -->
			<h1>Login Form</h1><br>
			<input type="mail" name="user" placeholder="Enter Username" value="<?php echo $username; ?>"><br><br>
			<input type="password" name="pass" placeholder="Enter password"><br><br>
			<input class="button" type="Submit" name="Submit" value="Login">
			<br>

			<span class="<?php echo $flagclass; ?>"><?php echo $Message;  ?></span>
		</form>

		<br><br>

			Not a User?<a href="createaccount.php" class="button">Create Account</a>
	</center>
</body>
</html>