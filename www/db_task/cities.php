<?php
	require_once("class.php");
	$obj = new library();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cities</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Cities</h4>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Name</td>
<td>Country</td>
</tr>
<?php $obj->getCities(); ?>
</table>
</center>
</body>
</html>