<?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Placeholder</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
.normalize{
	margin:0px;
}
  </style>
</head>
<body>
	<div class="container normalize">
<p><b><h2>Enter value of height and width of the image you want to generate</h2></b> </p>
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
		<button  type="submit" class="btn btn-large btn-success"value="Generate" >Generate</button>
	</li>
		
	</form>
</div>
</body>
</html>

