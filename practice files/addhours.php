<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<style type="text/css"> 
body{
	margin: 0;
	box-sizing: border-box;
}
form{
	margin-top: 100px;
}
input{
	width: 300px;
	padding: 10px;
	margin-top: 10px;
	outline: none;
}
.button{
	border: none;
	background-color: skyblue;
}
h1{
	color: skyblue;
}
.footer{
	position: relative;
	top: 300px;
}
</style>
<body>
	<center>
		<form method="POST" action="addhoursbackend.php"> <!-- sending admin inputs to backend php page -->
			<h1>Add Plant Form</h1><br>
			<label>Date</label>
			<input type="Date" name="date"><br>
			<label>Time</label>
			<input type="Time" name="t1">
			<label>TO</label>
			<input type="Time" name="t2"><br>
			<label>Display Status(Y/N)</label>
			<input type="text" name="ds"><br>
			<input  class="button" type="Submit" name="" value="ADD">

		</form>
	</center>
	<div class="footer">
		<?php
	include 'footer.php'; //inculding footer php page to the present page
	  ?>
	</div>
</body>
</html>