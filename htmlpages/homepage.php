<!doctype html>

<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Sql Active Record</title>
	<meta name='description' content='Sql Active Record'>
	<meta name='author' content='Kan'>
	<link rel='stylesheet' href='css/styles.css?v=1.0'>
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<h1 style="color:LightGreen;">Select SQL Code: </h1>

		<select name="databasename">
		<option value="accounts">accounts</option>
		<option value="todos">todos</option>
		</select>

		<select name="collection">
<?php
	echo $formstring;
?>
		</select>

		<input type="submit" value="Run" name="submit">
	</form>
<?php
	echo $tablestring;
?>
</body>
</html>
