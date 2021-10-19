<?php
//database connection
$database=mysqli_connect("localhost", "root","","constructco") OR die('Server Error no connection'.mysqli_connect_error());

//sql query to retrive project details
$retrieve=mysqli_query($database,"Select * from project");

if ($retrieve) {
	$rows=mysqli_num_rows($retrieve);
	if ($rows==0) {
		echo "No Projects found in database";
		die();
	}
	//displaying projects in list format
			echo "<br><h1>Projects List </h1>
			<ul>";   
			//fetching rows data and printing in list
			//find anchor tag below to display assignments of particular project name and sending project number with the link
			while ($fetch=mysqli_fetch_assoc($retrieve)){   
			echo "<h3>
				<li>
				<a href='assignments.php?projnum=".$fetch['PROJ_NUM']."'>".$fetch['PROJ_NAME']."</a></td>
				</li>
				</h3>";
			}
		echo"</ul>
		  ";
}


  ?>
