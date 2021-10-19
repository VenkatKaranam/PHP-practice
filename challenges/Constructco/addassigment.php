<?php 
if(isset($_REQUEST['projectnum']))
{
	//getting project number from link
$proj_num=$_REQUEST['projectnum'];
}
else{
	$proj_num="";
}
?>

<!-- form to add assignment -->
<h2>Add Assignment</h2>
<form method="post" action="addassign.php">
	Assignment date:<input type="date" name="adate" required=""><br><br>
	Project number:<input type="number" name="pnum" value="<?php echo $proj_num ?>" required=""><br><br>
	Employee number:<input type="number" name="enum" required=""><br><br>
	assignjob:<input type="number" name="ajob" required=""><br><br>
	Assign charge hours:<input type="decimal" name="achhr" required=""><br><br>
	Assign hrs:<input type="" name="ahr" required=""><br><br>
	<input type="submit" name="" value="submit">
</form><br>
<h2><a href="projectsdisplay.php">Projects</a></h2>
