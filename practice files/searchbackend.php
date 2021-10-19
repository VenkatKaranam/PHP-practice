<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include('searchengine.php'); //searchengine is embedded into the php file to display input field at top and result at down
echo"<center><div style='' id='result' class=container>";
$database=mysqli_connect("localhost", "root","","employeedb") OR die('Server Error no connection'.mysqli_connect_error()); //database connection through xampp server ,username,password,db name 
if(!isset($_REQUEST['keyword'])) //checking whether input value is recieved or not here 'keyword' is the name given to input field in html tag
{
	echo'<br>Entered nothing';  //if not recevied 
	die();
}
$term=$_REQUEST['keyword']; //if entered getting value name through the name 'keyword'
if ($term=="") {
	echo '<br>Entered nothing'; // if entered nothing
	
}
else{
	$result= mysqli_query($database,"Select * from search where title like '%$term%'"); //sql query to retrive data that term matches to the value in database
	$rows=mysqli_num_rows($result); //return no rows are there in with the term that 
	if ($result) {
		if($rows==0)
		{
			echo 'nothing found with the term'; //if there is no match and return no of rows as 0
		}
		else{
		while($fetch=mysqli_fetch_assoc($result)){ //fetching data each row through while loop and displaying
		echo '<h1>'.$fetch['title'].'</h1>'; 
	
		}
			echo "</div >";
		}		
	}
	else{
		echo 'not retrived'; //if retrive query fails
	}
}

echo"</div></center>";
?>
</body>
</html>