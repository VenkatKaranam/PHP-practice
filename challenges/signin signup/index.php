<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Post Challenge</title>
</head>
<body>
	<center>
	<form method="POST" action="index.php"> <!-- form to take inputs-->
		<input type="number" name="count" min="1" max="20" placeholder="Count"><br><br>
		<select name="animal">
			<option>Select animal</option>
			<option>Dog</option>
			<option>Cat</option>
			<option>Goat</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit"><br><br>
	</form>

</body>
</html>

<?php 
if ($_SERVER['REQUEST_METHOD']=="POST") { //checking POST method enabled or not
		$count=$_POST['count']; //getting input values from form
		$animal=$_POST['animal'];
		$allowed_animals=array('Dog','Cat','Goat'); //php validations
				if (is_int($count) || $count<1 || $count>20) {
					echo("Invalid count");
				}
				else{
					echo 'Count is: '.$count; //displaying count
				}
				if (in_array($animal, $allowed_animals)) { //validating selected animal
					echo "<br>Selected animal is ".$animal;
				}
				else
				{
					echo'<br>Invalid animal name';
				}
}
	echo'</center>';

 ?>