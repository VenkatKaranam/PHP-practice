<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- link to add user info -->
	<a href="userinfo.php" class="button">Add Info</a>
	<!-- link to logout -->
	<a href="logout.php" class="button">Logout</a><br>
	<center>
		<!-- search form -->
			<form name="f" onsubmit="return validate()" method="POST" action="search.php" >
				<!--select input tags name as search by and values as database column name -->
				<select name="type">
					<option>Search By</option>
					<option>Author</option>price
					<option>genre</option>
					<option>title</option>
					<option>above price</option>
					<option>below price</option>
				</select>
				<!--input field to enter respective input value -->
				<input type="text" name="input" placeholder="Enter respective input"> 
			<button name="search" class="button"> Search</button><br><br>
			<input class="button" type="reset" name="" value="Reset">
		</form>

</body>
<script type="text/javascript">
	function validate() {
		var searchtype=document.f.type.value;
		if(searchtype=="Search By"  )
		{
			alert("Please Search By");
			return false;
		}
	}
</script>
</html>
<?php 
 $database=mysqli_connect("localhost", "root","","bookstore_db") OR die('Server Error no connection'.mysqli_connect_error());
 //verifing session
 session_start();
 if (!isset($_SESSION['user'])) {
 	header("location:login.php");
 }
 if ($_SERVER['REQUEST_METHOD']=="POST") {
 $searchtype=$_REQUEST['type'];
 $value=$_REQUEST['input'];


			 if($searchtype=="Author" || $searchtype=="genre" || $searchtype=="title" )
			 {
			 	//sql query if search type is text
			 	$namequery=mysqli_query($database,"select * from books_table where `$searchtype`='$value' ");
			 	//function to display result
			 			display($namequery);

			 }
			 else if($searchtype=="above price"){
			 	//sql query to show the result above the price
			 		$priceabove=mysqli_query($database,"select * from books_table where price>'$value' ");
			 		if ($priceabove) {
			 			display($priceabove);
			 		}
			 }
			 else if ($searchtype=="below price") {
			 	//sql query to show the result below th price
			 	$pricebelow=mysqli_query($database,"select * from books_table where price<'$value' ");
			 		if ($pricebelow) {
			 			display($pricebelow);
			 		}
			 }
			 else{
				echo "Enter the search term";
			}
			}
			else{
				echo "Enter the search term";
			}

//display function
 function display($retrieve)
 			{
		//getting number of rows in query
		$rows=mysqli_num_rows($retrieve);
		//if number of rows is 0 mean no data in the database
			if($rows==0)
			{
				echo 'No records found ';
				die();
			}
			//displayingdata in table format
			echo "<br><h1></h1>
			<table align='center' width='900px' > 
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Genre</th>
						<th>Price</th>
						<th>Rating</th>
					</tr>";   
			//fetching rows data and printing in table rows
			while ($fetch=mysqli_fetch_assoc($retrieve)){   
			echo "<tr align='center'>
				<td>".$fetch['title']."</td>
				<td>".$fetch['Author']."</td>
				<td>".$fetch['genre']."</td>
				<td>".$fetch['price']."</td>
				<td>".$fetch['rating']."</td>
				</tr>";
			}
			echo'</table>	</center>';
		}
 

 ?>