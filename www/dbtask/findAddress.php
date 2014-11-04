<table border="1" align="center">
    <tr align="center">
	<td>ID</td>
	<td>Country</td>
	<td>City</td>
	<td>Street</td>
	<td>ZIP</td>
	</tr>
<?
if ($_POST['query'] !== '') {
	require_once("class.php");
	$obj1 = new library();
	$obj1->searchAddress($_POST['query']);
}
?>
</table>
