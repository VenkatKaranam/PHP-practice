<?php
//database connection
$database=mysqli_connect("localhost", "root","","constructco") OR die('Server Error no connection'.mysqli_connect_error());
//getting project number from link
$projectnum=$_REQUEST['projnum'];
//sql query to join tables and getting data for required column
$retrieve=mysqli_query($database,"Select ASSIGN_NUM,ASSIGN_DATE,EMP_LNAME,EMP_FNAME,ASSIGN_HOURS,ASSIGN_CHARGE from assignment,employee  where assignment.EMP_NUM=employee.EMP_NUM and PROJ_NUM='$projectnum'");
if($retrieve)
{

//data is displaying table format

echo "<br><h1>Display Data</h1>
			<table width='900px' border='2px solid black'> 
					<tr>
						<th>Assignment Date</th>
						<th>Employee Name</th>
						<th>Assignment Hours</th>
						<th>Assignment Charge</th>
					</tr>"; 

					//displaying assignments in table format and achor tags for update and delete operations
					while ($fetch=mysqli_fetch_assoc($retrieve)) {    
			echo "<tr>
				<td>".$fetch['ASSIGN_DATE']."</td>
				<td>".$fetch['EMP_FNAME']." ".$fetch['EMP_LNAME']."</td>
				<td>".$fetch['ASSIGN_HOURS']."</td>
				<td>".$fetch['ASSIGN_CHARGE']."</td>
				<td><a href='update.php?assign_num=".$fetch['ASSIGN_NUM']."'>Update</td>
				<td><a href='delete.php?assign_num=".$fetch['ASSIGN_NUM']."'>Delete</td>
				</tr>";
			}
			echo'</table>';

echo '<h2><a href="projectsdisplay.php">Projects</a></h2><h2><a href="addassigment.php?projectnum='.$projectnum.'">ADD assignments</a></h2>';
}
?>
