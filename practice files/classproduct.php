<?php 
//defining class
class product
 {
 	//declaring the variables;
 	public $id;
 	public $name;
 	public $retailerprice;
 	public $consumerprice;
 	public $stock;
 	
 	//function to add product in th database
 	function add($name,$retailerprice,$consumerprice,$stock)
 	{
 		//database connection
 		$database=mysqli_connect("localhost", "root","","productdb");
 		//sql query to insert data in the database table
 		$insert=mysqli_query($database,"insert into producttable(name,retailerprice,consumerprice,stock) values('$name',
 		'$retailerprice','$consumerprice','$stock') "); 
		if($insert)
		{
			echo '<h2>Product Added</h2>';
		
		}
 	}
 	//function to delete product in database
 	function delete($id)
 	{
 		$database=mysqli_connect("localhost", "root","","productdb");
 		//sql query to delete data from the table
 		$delete=mysqli_query($database,"delete from producttable where id='$id'"); 
		if($delete)
		{
			echo '<h2>Product Deleted</h2>';
		
		}
 	}

 	function read()
 	{
 		$database=mysqli_connect("localhost", "root","","productdb");
 		//sql query to retrive the whole data in producttable
 		$retrive=mysqli_query($database,"select *from producttable"); 
			if ($retrive) {
			echo "<table style='margin-top:50px;' width='900px' border='2px solid black'>
					<tr>
						<th>product id</th>
						<th>product name</th>
						<th>retailer price</th>
						<th>consumer price</th>
						<th>stock</th>
					</tr>";   
				//fetching the all rows of data and displaying in the table format
			while ($fetch=mysqli_fetch_assoc($retrive)){   //fetching rows data and printing in table format
			echo "<tr>
				<td>".$fetch['id']."</td>
				<td>".$fetch['name']."</td>
				<td>".$fetch['retailerprice']."</td>
				<td>".$fetch['consumerprice']."</td>
				<td>".$fetch['stock']."</td>";
				//providing the delete button aside of the product details and id is sent as name with the link
				echo"<td><a href='deleteproduct.php?name=".$fetch['id']."'>Delete</a>
				</tr>";
			}
			echo '</table>';
		}
 	}
 }
  ?>