<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- external css file link -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form</title>

<body>
	<center>
		<div class="container">
	</div>
<?php 
//database connection
$database=mysqli_connect("localhost", "root","","address_book") OR die('Server Error no connection'.mysqli_connect_error());
//sql query to get all rows of data from table
$retrieve=mysqli_query($database,'select * from address_table');
			//creating form and displaying names as checkbox input to delete check names
			echo "<br>
			<h2>Delete data form</h2>
		<form name='form' method='POST' action='deletedata.php' >";   
			//Giving input field name=i and incremented for every loop
			$i=1;
			while ($fetch=mysqli_fetch_assoc($retrieve)){   
			echo "<h3><input class='check' type='checkbox' name='".$i."' value='".$fetch['firstname']."'>".$fetch['firstname']."</h3>";
			$i=$i+1;
			}
?>
		<button class="button"> Delete</button><br><br>
		<input class="button" type="reset" name="" value="Reset"><br><br>
		</form>
		<div>
		<!-- anchor tag to reach home page -->
		<a href="index.html" class="button">Home Page</a>
		</div>
	</center>
</body>
</html>