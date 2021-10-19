<?php 
$database=mysqli_connect("localhost","root","","bookstore"); //db connection
if($database){
		$retrive=mysqli_query($database,'select *from inventoryitems');
		while ($fetch=mysqli_fetch_assoc($retrive)){
			echo '<br><br><a href="addcart.php?name='. $fetch['bookname'].'" >'. $fetch['bookname'].' </a> quantity: '.$fetch['quantity'];//link to every book that redirects to addcart.php
		}
		echo '<br><br><br><a href="checkout.php" >Checkout page</a>'; //checkout page link
	}

 ?> 