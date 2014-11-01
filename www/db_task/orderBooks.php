<a href="ordBooks.php"><h3>Back</h3></a>
<center>
<h4>Order by</h4>
</center>
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
	require_once("class.php");
	$obj3 = new library();
	$obj3->orderBooks($_POST['row'], $_POST['way']);
?>
</table>