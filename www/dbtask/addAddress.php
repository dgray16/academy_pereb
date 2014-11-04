<?
require_once("class.php");
$obj2 = new library();
?>
<html>
<head>
<title>Add address</title>
</head>

<body>
<a href="index.html"><h3>Back</h3></a>
<center>
<h4>Add address</h4>
<form action="insertAddress.php" method="post">
<table>
<tr align="center">
<td><select name = "country_id" required>
   		<option value = "">-- Select country --</option>
        <?
        $a = mysql_query("SELECT * FROM `countries`");
		while ($countries = mysql_fetch_array($a))
			//echo '
			//<option value="'.$author['id'].'">'.$author['surname'].' '.$author['first_name'].'</option>
			//';
			echo "<option value = '$countries[id]'>$countries[name]</option>";
		?>
    </section>
</td>
<td><select name = "city_id" required>
   		<option value = "">-- Select city --</option>
        <?
        $a = mysql_query("SELECT * FROM `cities`");
		while ($cities = mysql_fetch_array($a))
			//echo '
			//<option value="'.$author['id'].'">'.$author['surname'].' '.$author['first_name'].'</option>
			//';
			echo "<option value = '$cities[id]'>$cities[name]</option>";
		?>
    </section>
</td>
</tr>
<tr align="center">
<td>Street</td>
<td>Zip</td>
</tr>
<tr align="center">
<td><input type="text" name="street" required></td>
<td><input type="text" name="zip" required></td>
</tr>
</table>
<br>
<input type = "submit" value="Go">
</form>
</center>
</body>
</html>