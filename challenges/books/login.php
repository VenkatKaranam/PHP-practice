<!--login system-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- external style sheet -->
		<link rel="stylesheet" type="text/css" href="style.css">
	<title>Sign in</title>
	<body>
	<center>

<!-- embedded php code and html code -->
<?php 
$Message="";
$username="";
$password="";
//database connection
 $database=mysqli_connect("localhost", "root","","bookstore_db") OR die('Server Error no connection'.mysqli_connect_error());
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//getting values when login button clicked
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
		$retrieve=mysqli_query($database,"select * from login_table where username='$username'");
		$fetch=mysqli_fetch_assoc($retrieve);
		//checking user entered password with database password
		if($username==$fetch['username'])
		{
			if ($password==$fetch['password']) {
				//session started to create login session
					session_start();
					//username stored in session variable
				$_SESSION['user']=$username;
				//redirects to search page if access is success
				header("location:search.php");

			}
			else
			{
				//error message if wrong credentials
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

 		<!--form in html code -->
		<form method="POST" name="f" onsubmit="return validate()"  action="login.php"> <!--sending user username and password to login.php(self php) through method POST -->
			<h1>Login Form</h1><br>
			<input type="mail" id="user" name="user" placeholder="Enter Username" value="<?php echo $username; ?>"><br><br>
			<input type="password" id="pass" name="pass" placeholder="Enter password"><br><br>
			<input class="button" type="Submit" name="Submit" value="Login">
			<br>
			<span class="<?php echo $flagclass; ?>"><?php echo $Message;  ?></span>
		</form>
	</center>
</body>
<script type="text/javascript">
	function validate() {
		var name=document.f.user.value;
		var password=document.f.pass.value;
		if((name.trim()).length==0 || (password.trim()).length==0 )
		{
			alert("Enter Both Username and Password");
			return false;
		}
	}
</script>
</html>