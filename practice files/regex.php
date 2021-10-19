<?php

$url = $_REQUEST['url'];
 $pattern ="/(https|http|ftp)\:\/\/|([a-z0-9A-Z]+\.[a-z0-9A-Z]+\.[a-zA-Z]{2})|\?([a-zA-Z0-9]+[\&\=\#a-z]+)/i"; //regex is modified to validate url
 if (preg_match($pattern, $url)){
 	echo "The URL is OK.<br><br>";

 } 
  else {echo "wrong URL.<br><br>";}



$string1=$_REQUEST['lower'];
$pattern1a="/[a-z]{4}/"; //regex to ensure string having atleast 4 lowercase letters 
$pattern2a="/[a-z]{5,}/"; //regex to ensure string having more than 5 lowercase letters 
if(preg_match($pattern1a, $string1) && !preg_match($pattern2a, $string1)) //checking string should have exactly 4 lower case and not more than 4
{
	echo $string1."  matches with only four lower letters<br><br>";
}
else{
	echo $string1."  not matches with only four lower letters<br><br>";
}
$string2=$_REQUEST['digit'];
$pattern1b="/[0-9]{6}/";
$pattern2b="/[0-9]{8,}/";
if (preg_match($pattern1b,$string2) && !preg_match($pattern2b, $string2)) { //checking no of digits lay betweeen 6 and 8
	echo $string2." matches with 6 to 8 digits";
}
else{
	echo$string2." not matches with 6 to 8 digits";
}

  ?>