<?php 
 $database=mysqli_connect("localhost", "root","","bookstore_db") OR die('Server Error no connection'.mysqli_connect_error());
 //verifying the session
session_start();
 if (!isset($_SESSION['user'])) {
 	header("location:login.php");
 }
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Info</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<a href="search.php" class="button">Seach Books</a><br>
	<center>
		<!-- form to take info from the user-->
		<form name="f" method="POST" onsubmit="return validate()"  action="userinfo.php"> <!--data sent to self php file -->
			<h1>User Info Form</h1><br>
			<input type="mail" name="user" placeholder="Enter Username" value="<?php echo $_SESSION['user'];?>"><br><br>
			<input type="text" name="address" placeholder="Enter address"><br><br>
			<select name="payment">
				<option>Payment</option>
				<option>Net Banking</option>
				<option>UPI</option>
				<option>Debit Card</option>
				<option>Credit Card</option>
			</select><br>
			<input class="button" type="Submit" name="Submit" value="Add">
			<br>
		</form>
	</center>

</body>
<!-- javascript Validation-->
<script type="text/javascript">
function validate() {
		var name=document.f.user.value;
		var address=document.f.address.value;
		var payment=document.f.payment.value;
		if((name.trim()).length==0 || (address.trim()).length==0 || payment=="Payment"  )
		{
			alert("All fields are mandatory");
			return false;
		}
	}
	</script>
</html>
<!-- php code to insert user data in database -->
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$username=$_SESSION['user'];
	$address=$_REQUEST['address'];
	$payment=$_REQUEST['payment'];
	//SQL query to insert
	$insert=mysqli_query($database,"insert into userinfo_table values('$username','$address','$payment') ");
	if($insert)
	{
		echo"info added";
	}
	else{
		echo"Info not added or already added";
}
}
  ?>