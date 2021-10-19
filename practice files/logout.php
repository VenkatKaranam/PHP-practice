<?php 
session_start(); 
session_destroy(); //clear the all session variables
header('location:index.html') //redirects to login page
?>