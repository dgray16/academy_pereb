<?
require_once("class.php");
$obj2 = new library();
?>
<html>
<head>
<title>Add author</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Add author</h4>
<form action="insertAuthor.php" method="post">
<table>
<tr align="center">
<td>Surname</td>
<td>First name</td>
<td>Birth year</td>
</tr>
<tr align="center">
<td><input type="text" name="surname" required></td>
<td><input type="text" name="first_name" required></td>
<td><input type="text" name="birth_year" required></td>
</tr>
<tr align="center">

<td>Year of death</td>
<td>Nationality</td>
</tr>
<tr align="center">
<td><input type="text" name="death_year" required></td>
<td>
	<select name = "country_id" required>
   		<option value = "">-- Select nationality --</option>
        <?
        $a = mysql_query("SELECT * FROM countries");
		while ($country = mysql_fetch_array($a))
			//echo '
			//<option value="'.$author['id'].'">'.$author['surname'].' '.$author['first_name'].'</option>
			//';
			echo "<option value = '$country[id]'>$country[name]</option>";
		?>
    </section>
</td>
</tr>
</table>
<br>
<input type = "submit" value="Go">
</form>
</center>
</body>
</html>