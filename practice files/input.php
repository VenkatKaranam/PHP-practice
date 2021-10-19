<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css"><!--external css file-->
	<script type="text/javascript" src="script.js"></script><!--external css file-->
</style>
<body>
	<center>
		<div class="container">
			<div class="label"></div>
		<img class=icon src="search.png" width="40px" height="40px">
		<label>Search factory</label><br>
	</div>
		<form name="form" method="POST" action="search.php" > <!--sending input values to regex.php through method POST -->	
			<input class="input_text" type="text" name="keyword" placeholder="Enter Your Keyword Term ">
			<button class="buttonsearch"><img src="icon.png" width="16px" height="16px"></button>

		</form>
		</div>
	</center>



</body>
</html>