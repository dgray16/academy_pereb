<a href="ordAuthors.php"><h3>Back</h3></a>
<center>
<h4>Order by</h4>
</center>
<table border="1" align="center">
    <tr align="center">
	<td>ID</td>
	<td>Surname</td>
	<td>First name</td>
	<td>Birthday</td>
	<td>Death</td>
	<td>Nationality</td>
	</tr>
<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->orderAuthors($_POST['row'], $_POST['way']);
?>
</table>