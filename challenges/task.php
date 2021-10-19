<?php
$word=$_REQUEST['input'];
echo "Entered String".$word;

echo "<br> <br> converting to uppercase<br>";
//strtoupper() method converts string to uppercase
echo strtoupper($word); 
echo "<br><br> converting to lower case <br>";
//strtolower() method converts string to lowercase
echo  strtolower($word);
echo "<br><br> converting first letter to uppercase <br>";
//ucfirst() method converts first letter of string to uppercase
echo ucfirst($word);
//ucword converts first letter of all words to upper 
echo "<br><br> converting first letter of all words to uppercase<br>";
echo ucwords($word);
 ?>