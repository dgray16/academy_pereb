<?
require_once("class.php");
$obj2 = new library();
?>
<html>
<head>
<title>Add publisher</title>
</head>

<body>
<a href="index.html"><h3>Back</h3></a>
<center>
<h4>Add publisher</h4>
<form action="insertPublisher.php" method="post">
<table>
<tr align="center">
<td>Name</td>
<td>Address</td>
<td>Contact person</td>
</tr>
<tr align="center">
<td><input type="text" name="name" required></td>
<td><select name = "address_id" required>
   		<option value = "">-- Select address --</option>
        <?
        $a = mysql_query("SELECT * FROM `addresses`");
		while ($address = mysql_fetch_array($a))
			//echo '
			//<option value="'.$author['id'].'">'.$author['surname'].' '.$author['first_name'].'</option>
			//';
			echo "<option value = '$address[id]'>$address[street]</option>";
		?>
    </section>
</td>
<td><input type="text" name="contact_person" required></td>
</tr>
</table>
<br>
<input type = "submit" value="Go">
</form>
</center>
</body>
</html>