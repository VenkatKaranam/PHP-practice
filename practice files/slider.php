<?php 

$database=mysqli_connect("localhost","root","","silder"); //after database created in phpmyadmin connection is established through query

if($database)
{
$s1=$_REQUEST['slider1']; //receving data from slider form
$s2=$_REQUEST['slider2'];
$s3=$_REQUEST['slider3'];
$s4=$_REQUEST['slider4'];
$s5=$_REQUEST['slider5'];
$s6=$_REQUEST['slider6'];

$insert=mysqli_query($database,"insert into slidersinfo values('$s1','$s2','$s3','$s4','$s5','$s6')"); //inserting data in to table
if($insert)
{
	header('location:sliderform.html'); //return to html page if inserted
}
else
{
	echo 'not inserted';
}
}
?>
