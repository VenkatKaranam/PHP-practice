<?php
//retriving the whole data entered in form an storing in php variables
$fname=$_REQUEST['fn'];
$lname=$_REQUEST['ln'];
$highq=$_REQUEST['hq'];
$cnic=$_REQUEST['cnic'];
$experience=$_REQUEST['ex'];
$lang="";

//checking each check box that which checkbox is checked
if(isset($_REQUEST['op1']))
{
	$lang=$lang.",".$_REQUEST['op1'];
}
if(isset($_REQUEST['op2']))
{
	$lang=$lang.",".$_REQUEST['op2'];
}
if(isset($_REQUEST['op3']))
{
	$lang=$lang.",".$_REQUEST['op3'];
}
if(isset($_REQUEST['op4']))
{
	$lang=$lang.",".$_REQUEST['op4'];
}
$gender=$_REQUEST['g'];
$pd=$_REQUEST['pd'];
$nation=$_REQUEST['na'];
$cover=$_REQUEST['c'];

//displaying the entered record in to table format
echo "<table style='margin-top:50px;' width='900px' border='2px solid black'>
					<tr>
						<th>FirstName</th>
						<th>LastNane</th>
						<th>Qualification</th>
						<th>CNIC</th>
						<th>Experience</th>
						<th>Programming languages</th>
						<th>Gender</th>
						<th>Province domcilie</th>
						<th>Nationality</th>
						<th>Cover Letter</th>
					</tr>";   
			echo "<tr>
				<td>".$fname."</td>
				<td>".$lname."</td>
				<td>".$highq."</td>
				<td>".$cnic."</td>
				<td>".$experience."</td>
				<td>".$lang."</td>
				<td>".$gender."</td>
				<td>".$pd."</td>
				<td>".$nation."</td>
				<td>".$cover."</td>

				</tr>";
  ?>