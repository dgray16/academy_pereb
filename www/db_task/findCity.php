<table border="1" align="center">
    <tr align="center">
	<td>ID</td>
	<td>Name</td>
	<td>Country</td>
	</tr>
<?
if ($_POST['query'] !== '') {
	require_once("class.php");
	$obj1 = new library();
	$obj1->searchCity($_POST['query']);
}
?>
</table>
