<a href="ordPublishers.html"><h3>Back</h3></a>
<center>
<h4>Order by</h4>
</center>
<table border="1" align="center">
    <tr align="center">
	<td>ID</td>
	<td>Name</td>
    <td>Address</td>
	<td>Contact person</td>
	</tr>
<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->orderPublishers($_POST['row'], $_POST['way']);
?>
</table>