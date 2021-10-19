<?php 
if(isset($_REQUEST['assign_num']))
{
	//getting assign number from link
$assign_num=$_REQUEST['assign_num'];
}
else{
	$assign_num="";
}

 ?>
 <!-- form to take data from user -->
<h2>Update Assignment</h2>
<form method="post" action="updatebackend.php">
	<!-- updating data through assign number so assign number is also sending in form-->
	Assignment Number:<input type="text" name="anum" value="<?php echo $assign_num ?>" required=""><br><br>
	Assignment date:<input type="date" name="adate" required=""><br><br>
	Project number:<input type="number" name="pnum" required=""><br><br>
	Employee number:<input type="number" name="enum" required=""><br><br>
	assignjob:<input type="number" name="ajob" required=""><br><br>
	Assign charge hours:<input type="text" name="achhr" required=""><br><br>
	Assign hrs:<input type="text" name="ahr" required=""><br><br>
	<input type="submit" name="" value="submit">
</form><br>
<h2><br> <a href="projectsdisplay.php">Projects</a></h2>
