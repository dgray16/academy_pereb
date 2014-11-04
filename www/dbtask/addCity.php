<?
require_once("class.php");
$obj2 = new library();
?>
<html>
<head>
<title>Add city</title>
</head>

<body>
<a href="index.html"><h3>Back</h3></a>
<center>
<h4>Add city</h4>
<form action="insertCity.php" method="post">
<table>
<tr align="center">
<td>Name</td>

<tr align="center">
<td><input type="text" name="name" required></td>
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
</tr>
</tr>
</table>
<br>
<input type = "submit" value="Go">
</form>
</center>
</body>
</html>