<?php
	require_once("class.php");
	$obj = new library();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Books by genre</title>
</head>

<body>
<a href="index.html"><h3>Back</h3></a>
<center>
<form action="getBooksByGenre.php" method="post">
<table>
<tr>
<td>
<select name = "genre_id" required>
   		<option value = "">-- Select genre --</option>
        <?
        $a = mysql_query("SELECT * FROM genres");
		while ($genres = mysql_fetch_array($a))
			//echo '
			//<option value="'.$author['id'].'">'.$author['surname'].' '.$author['first_name'].'</option>
			//';
			echo "<option value = '$genres[id]'>$genres[name]</option>";
		?>
    </section>
    </td>
</tr>

<tr>
<td><input type="submit" value="Go"></td>
</tr>
</table>
</form>
</center>
</body>
</html>