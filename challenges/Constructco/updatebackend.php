<?php

$database=mysqli_connect("localhost", "root","","constructco") OR die('Server Error no connection'.mysqli_connect_error());
if ($_SERVER['REQUEST_METHOD']=="POST") 
{
	//getting data and storing in php variables
$anum=$_REQUEST['anum'];
$adate=$_REQUEST['adate'];
$projnum=$_REQUEST['pnum'];
$empnum=$_REQUEST['enum'];
$ajob=$_REQUEST['ajob'];
$achrghr=$_REQUEST['achhr'];
$ahour=$_REQUEST['ahr'];
$achrg=$achrghr*$ahour ;

//sql query to update data with assign number
$update=mysqli_query($database,"update assignment set ASSIGN_DATE='$adate',PROJ_NUM='$projnum',EMP_NUM='$empnum',ASSIGN_JOB='$ajob',ASSIGN_CHG_HR='$achrghr',ASSIGN_HOURS='$ahour',
ASSIGN_CHARGE='$achrg' where ASSIGN_NUM='$anum' ");

if ($update) {
	echo '<h2>assigment updated</h2>';
}
else{
	echo '<h2>not Updated ! Check project number employee number job code(foriegnekeys) and add again </h2>';
}
echo ' <h2><br> <a href="projectsdisplay.php">Projects</a></h2>'; 
}  ?>