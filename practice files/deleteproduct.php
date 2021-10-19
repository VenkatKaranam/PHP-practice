<?php
//including class product page
require('classproduct.php');
//getting the id that is sent along with link as name
$id=$_GET['name'];
//creating object 
$d=new product();
//calling delete function to delete particular product
$d-> delete($id);
$d->read();
//link to addproducts
echo '<a href="addproduct.html" >Add product</a>';
	
  ?>