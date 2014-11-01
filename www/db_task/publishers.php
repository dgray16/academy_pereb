<?php
	require_once("class.php");
	$obj = new library();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Publishers</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Publishers</h4>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Name</td>
<td>Address</td>
<td>Contact person</td>
</tr>
<?php $obj->getPublishers(); ?>
</table>
</center>
</body>
</html>