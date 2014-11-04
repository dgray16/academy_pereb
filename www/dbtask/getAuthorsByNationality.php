<a href="authorsByNationality.php">Back</a>
<table border="1" align="center">
<tr align="center">
	<td>ID</td>
	<td>Surname</td>
	<td>First name</td>
	<td>Birthday</td>
	<td>Death</td>
	<td>Nationality</td>
	</tr>
</tr>
<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->getAuthorsByNationality($_POST['country_id']);
?>
</table>
