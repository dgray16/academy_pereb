<?php
	require_once("class.php");
	$obj = new library();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Books</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Books </h4>
<table border="1">
<tr align="center">
<td>ISBN</td>
<td>Author</td>
<td>Title</td>
<td>Genre</td>
<td>Pages</td>
<td>Publication year</td>
<td>Publisher</td>
<td>Admission date</td>
</tr>
<?php $obj->getBooks(); ?>
</table>
</center>
</body>
</html>