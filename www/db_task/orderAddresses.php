<a href="ordAddresses.php"><h3>Back</h3></a>
<center>
<h4>Order by</h4>
</center>
<table border="1" align="center">
    <tr align="center">
	<td>ID</td>
	<td>Country</td>
    <td>City</td>
	<td>Street</td>
    <td>ZIP</td>
	</tr>
<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->orderAddresses($_POST['row'], $_POST['way']);
?>
</table>