<?
require_once("class.php");
$obj2 = new library();
?>
<html>
<head>
<title>Add genre</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Add genre</h4>
<form action="insertGenre.php" method="post">
<table>
<tr align="center">
<td>Name</td>
</tr>
<tr align="center">
<td><input type="text" name="name" required></td>
</tr>
</table>
<br>
<input type = "submit" value="Go">
</form>
</center>
</body>
</html>