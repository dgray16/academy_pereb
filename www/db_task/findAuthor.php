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
if ($_POST['query'] !== '') {
	require_once("class.php");
	$obj1 = new library();
	$obj1->searchAuthor($_POST['query']);
}
?>
</table>
