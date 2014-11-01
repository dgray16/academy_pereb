<table border="1" align="center">
    <tr align="center">
	<td>ID</td>
	<td>Name</td>
    <td>Address</td>
	<td>Contact person</td>
	</tr>
<?
if ($_POST['query'] !== '') {
	require_once("class.php");
	$obj1 = new library();
	$obj1->searchPublisher($_POST['query']);
}
?>
</table>
