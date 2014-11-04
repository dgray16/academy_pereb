<table border="1" align="center">
    <tr align="center">
	<td>ID</td>
	<td>Name</td>
	</tr>
<?
if ($_POST['query'] !== '') {
	require_once("class.php");
	$obj1 = new library();
	$obj1->searchCountry($_POST['query']);
}
?>
</table>
