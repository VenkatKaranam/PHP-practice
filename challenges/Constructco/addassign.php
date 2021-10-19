<?php 
$database=mysqli_connect("localhost", "root","","constructco") OR die('Server Error no connection'.mysqli_connect_error());
$adate=$_REQUEST['adate'];
$projnum=$_REQUEST['pnum'];
$empnum=$_REQUEST['enum'];
$ajob=$_REQUEST['ajob'];
$achrghr=$_REQUEST['achhr'];
$ahour=$_REQUEST['ahr'];
$achrg=$achrghr*$ahour ;

//sql query to insert data
$insert=mysqli_query($database,"insert into assignment(ASSIGN_DATE,PROJ_NUM,EMP_NUM,ASSIGN_JOB,ASSIGN_CHG_HR,ASSIGN_HOURS,
ASSIGN_CHARGE) values('$adate','$projnum','$empnum','$ajob','$achrghr','$ahour','$achrg')");
if ($insert) {
	echo '<h2>assigment added</h2>';
}
else{
	//if foreign key entites must enter correctly to work query correctly
	echo '<h2>not added ! Check project number employee number job code(foriegnekeys) and add again </h2>';
}
echo ' <a href="projectsdisplay.php">Projects</a></h2>'; 

 ?>
