<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>footer</title>
	<style type="text/css">
		body{
			margin: 0;
			box-sizing: border-box;
		}
		footer{
			padding: 10px;
			text-align: center;
			color: white;
			font-size: 20px;
			font-weight: bold;
			background-color: skyblue;
		}
	</style>
</head>
<body>
	<?php
$database=mysqli_connect("localhost","root","","restaurant"); //database connection

if($database)
{	
	$retrive=mysqli_query($database,"select *from openhours order by id desc "); //retrivig data in decreasing order of id so recently add data will retrived
	if(!mysqli_num_rows($retrive)==0){
	$fetch=mysqli_fetch_assoc($retrive); //fetching data in $retrive variable
	echo'<footer><p>Recently added open hours:'.$fetch["timings"].'</p></footer>'; //displaying open hours in footer
	}
	else{
		echo'<footer><p>open hours:not updated yet</p></footer>'; //if there no rows in table
	}  
}
?>
</body>
</html>