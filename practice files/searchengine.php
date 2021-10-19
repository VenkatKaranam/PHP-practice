<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css"><!-- external css file -->
	<title></title>
</head>
<body>
	<center>
	<div class="container">
			<div class="label"></div>
		<img class=icon src="search.png" width="40px" height="40px">
		<label>Search Engine</label><br>
	</div>
		<form name="form" method="POST"  action="searchbackend.php" > <!--sending input values to searchbackend.php through method POST -->	
			<input class="input_text" type="text" name="keyword" placeholder="Enter Search Term "><!-- assigned name to the input tag-->
			<button class="buttonsearch"><img src="icon.png" width="16px" height="16px"></button>

		</form>
	</center>
</body>
</html>