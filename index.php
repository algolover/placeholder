<?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Placeholder</title>
</head>
<body>
<p>Enter value of height and width of the image you want to generate </p>
<form action="generate.php" method="GET">
	<li>
		<label for="Height">Height</label>
		<input type="text" name="Height">
	</li>
	<br>

	<li>
		<label for="Width">Width</label>
		<input type="text" name="Width">
	</li>
	<br>
	<li>
		<button  type="submit" value="Generate" >Generate</button>
	</li>
		
	</form>
</body>
</html>

