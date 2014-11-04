<a href="booksByAuthor.php">Back</a>
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
	$obj1 = new library();
	$obj1->getBooksByAuthor($_POST['author_id']);
?>
</table>
