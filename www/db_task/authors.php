<?php
	require_once("class.php");
	$obj = new library();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Authors</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Authors </h4>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Surname</td>
<td>First name</td>
<td>Birth year</td>
<td>Year of death</td>
<td>Nationality</td>
</tr>
<?php $obj->getAuthors(); ?>
</table>
</center>
</body>
</html>