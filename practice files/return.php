<<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
echo"<div class=container>";
$database=mysqli_connect("localhost", "root","","employeedb") OR die('Server Error no connection'.mysqli_connect_error()); //database connection through xampp server ,username,password,db name 
//include the require here
$term=$_GET['name']; //getting name through link
if ($term=="") {
	echo 'entered nothing';
	die();
}
else{
	$result= mysqli_query($database,"Select * from search where title='$term'"); //sql query to retrive whole data is retrived
	$rows=mysqli_num_rows($result);
	if ($result) {
		if($rows==0)
		{
			echo 'nothing found with the term';
		}
		else{
		echo "<div>";
		echo "<a href='search.php' class='buttonback'>back</a>"; //button to return main page
		$fetch=mysqli_fetch_assoc($result);
		echo '<h1>'.$fetch['title'].'</h1>';
		echo '<p>'.$fetch['content'].'</p>';
		echo "</div >";
		}		
	}
	else{
		echo 'not retrived';
	}
}
echo"</div>";
?>
</body>
</html>