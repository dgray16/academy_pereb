<?php
	require_once("class.php");
	$obj = new library();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Genres</title>
</head>

<body>
<a href="index.html"><h3>Back</h3></a>
<center>
<h4>Genres </h4>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Name</td>
</tr>
<?php $obj->getGenres(); ?>
</table>
</center>
</body>
</html>