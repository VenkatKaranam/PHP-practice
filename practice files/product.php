<?php

$un=$_POST['username'];   //receving data from form and storing in php variable ($_POST['variable'] ,here variable is the name given in  input field
$pn=$_POST['productname'];
$pr=$_POST['productprice'];
$phn=$_POST['phonenumber'] ;

echo $un.'<br>'.$pn.'<br>'.$pr.'<br>'.$phn; //printing recevied data
 ?>