<?php 
	session_start(); //session created
			$name=$_GET['name']; //name taken from bookstore.php
			$_SESSION['savedbook']=$name;  //book name saved to session variable
			header('location:bookstore.php'); //returns to bookstore.php

 ?>