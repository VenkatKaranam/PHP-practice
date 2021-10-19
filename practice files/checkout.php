<?php 
session_start();
if($_SESSION['savedbook']){
	$book=$_SESSION['savedbook']; //saved book stored in php variable 

	//form created and form sent to checkoutbackend.php page through POST method
	echo '<center>
		You saved book  : '.$book.'<br><br> 
		<form method="POST" action="checkoutbackend.php">
			<label>Firstname</label>
			<input type="text" name="fn"><br><br>
			<label>Lastname</label>
			<input type="text" name="ln"><br><br>
			<label>Payment option</label>
			<select name="pay">
				<option disabled="" selected="">select</option>
				<option>Card</option>
				<option>UPI</option>
				<option>Cash on delivery</option>
			</select><br><br>
			<input type="submit" value="Submit">
		</form>
	</center>';
}
else{
	echo 'you not saved any book';
}
?>