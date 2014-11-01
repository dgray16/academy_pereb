<table border="1" align="center">
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
<?
if ($_POST['query'] !== '') {
	require_once("class.php");
	$obj1 = new library();
	$obj1->searchBook($_POST['query']);
}
?>
</table>
