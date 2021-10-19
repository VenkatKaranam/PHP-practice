<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<!-- External Css style sheet -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<center>
		<!-- form to send data and calling function validate() to validate the form   -->
		<form method="POST" onsubmit="return validate();" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
			<!--sending username and password to self php file through method POST -->
			<h1>SignUp Form</h1><br>
			<input type="mail" id="name" name="user" value="<?php echo $username; ?>" placeholder="Enter Username"><br><br>
			<input type="password" id="pass" name="pass" placeholder="Enter password"><br><br>
			<input type="password" id="verifypass" name="verifypass" placeholder="Enter Verify password"><br><br>
			<input type="password" id="code" name="code" placeholder="Enter Secret Code"><br><br>
			<input class="button" type="Submit" name="submit" value="SignUp">
			<input class="button" type="reset" name="clear" value="Reset">
		</form>

	<br><br>Already User?<a href="signin.php" class="button">Sign in</a><br><br>
	</center>


	<script type="text/javascript">
		//validation of form
		function validate() {
			var name=document.getElementById('name').value;
			var pass=document.getElementById('pass').value;
			var verifpass=document.getElementById('verifypass').value;
			var code=document.getElementById('code').value;
			if((name.trim()).length==0)
				{
					alert("Enter username");
					return false;
				}
			else if(!(pass==verifpass))
			{
				alert("Password and Verify not matched");
				return false;
			}
			else if ((code.trim()).length==0) {
				alert("Enter Security Code");
				return false;
			}
			else{
				return true;
			}
		}
	</script>
</body>
</html>

<?php
//php variables for  message
$username="";
//database connection
 $database=mysqli_connect("localhost", "root","","accounts_db") OR die('Server Error no connection'.mysqli_connect_error());

 if ($_SERVER['REQUEST_METHOD']=='POST') {
 	//getting values for user entered
 	$username=$_POST['user'];
 	$password=$_POST['pass'];
 	$entered_code=$_POST['code'];
 	//Getting security code from db
 	$code_query=mysqli_query($database,"select code from secrity_code");
 	$fetch=mysqli_fetch_assoc($code_query);
 	$security_code=$fetch['code'];
 	//checking security code
 	if($entered_code==$security_code){
 		$allusers=mysqli_query($database,"select username from users_table");
 		//checking if any user with same username
 		while ($fetchuser=mysqli_fetch_assoc($allusers)) {
 			if ($username==$fetchuser['username']) {
 				echo "<center><span class='error'>username already existed</span></center>";
 			}
 		}
 		//if no user with same username creating new account
 		$insert=mysqli_query($database,"insert into users_table values('$username','$password')");
 		if ($insert) {
 			echo"<center><span class='success'>Account Created</span></center>";

 		}
 	}
 	//if entered worng security code
 	else
 	{
 		echo "<center><span class='error'>Wrong Security Code</span></center>";
 	}
 }

  ?>