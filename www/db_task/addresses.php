<?php
	require_once("class.php");
	$obj = new library();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Addresses</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Addresses</h4>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Country</td>
<td>City</td>
<td>Street</td>
<td>Zip</td>
</tr>
<?php $obj->getAdresses(); ?>
</table>
</center>
</body>
</html>