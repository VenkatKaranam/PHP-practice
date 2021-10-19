<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<style type="text/css">
form{
	margin-top: 100px;
}
input{
	width: 300px;
	padding: 10px;
	margin-top: 10px;
	outline: none;
}
.button{
	border: none;
	background-color: skyblue;
}
</style>
<body>
	<center>


		<form method="POST" action="product.php">
			<label>Username</label>
			<input type="text" name="Username">
			<label>product name</label>
			<input type="text" name="productname">
			<label>product price</label>
			<input type="text" name="productprice">
			<label>phone number</label>
			<input type="text" name="phone number">

		</form>
	</center>

</body>
</html>