<?php 
$database=mysqli_connect("localhost", "root","","productdb") OR die('Server Error no connection'.mysqli_connect_error());
/**
 * 
 */
//class product page is included here to create the objects for the class
require('classproduct.php');
//retriving the manager inputs and storing in the php variables
$n=$_REQUEST['name'];
$rp=$_REQUEST['rp'];
$cp=$_REQUEST['cp'];
$s=$_REQUEST['stock'];
//creating object for class product
 $a=new product();
 //calling the add function and sending values as parameters
 $a->add($n,$rp,$cp,$s);
 //calling read function to display all products
 $a->read();
 //a link to go add product page
 echo '<a href="addproduct.html" >Add product</a>';
 ?>