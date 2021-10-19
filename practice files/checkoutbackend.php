<?php 
$database=mysqli_connect("localhost","root","","bookstore");
if($database)
{
	session_start();
		if($_SESSION['savedbook']){
			$fname=$_REQUEST['fn'];  //form input stored in php variables 
			$lname=$_REQUEST['ln'];
			$payment=$_REQUEST['pay'];
			$book=$_SESSION['savedbook'];

			$insert=mysqli_query($database,"insert into orders(firstname,lastname,paymentoption,bookname) values('$fname','$lname','$payment','$book')"); //insert query to insert order details in table

			$bookquantity=mysqli_query($database,"update inventoryitems set quantity=quantity-1 where bookname='$book'"); //update query to update quantity
			if($insert && $bookquantity )
			{	

				echo 'Your book '.$book.' placed order';
				session_destroy(); //session destroyed to clear session variable 
				echo '<br><a href="bookstore.php">continue to store</a>'; //link to redirect to bookstore.php
			}
			else{
				echo "order not placed";
			}
		}
	}
else{
	echo 'you not saved any book';
}
?>