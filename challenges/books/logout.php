<?php
//clearing the session variable
session_start();
session_destroy();
header("location:login.php");


  ?>