<?php
$name=$_POST['name'];
$age=$_POST['age'];


$pattern1="/[^a-zA-Z]/";      //pattern [^a-zA-Z] matches if any string not containing any of the characters ranging from a through z 									and A through Z it returns 1 if contain any other special characters and digits or else return 0 .
 


$pattern2="/[[:space:]]/";    //pattern [[:space:]] matches any string containing spaces returns 0 if contains spaces


$match_characters=preg_match($pattern1, $name);  //using preg_match function matching character pattern and space pattern
$match_space=preg_match($pattern2,$name);



if( $match_characters==1 && $match_space==0) 
{
	echo '<center><h2 style="color:red;">Enter only characters</h2></center>'; //displaying error message if consist any digits of other 																			special characters
} 
else{
	if ($age>18 && $age<45) {
	echo '<center><h2 style="color:green;">thanks for your patience</h2></center>'; //displaying message if entered both are correctly
	}
	else{
		echo '<center><h2 style="color:red;">Enter Correct age</h2></center>' ;
	}
}


 ?>
