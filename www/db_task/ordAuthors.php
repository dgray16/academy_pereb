<html>
<head>
<title>Order books</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Order by</h4>
<form action="orderAuthors.php" method="post">
<table>
<tr>
<td><select name="row">
<option value = "">-- Select row name --</option>
<option value = "id">ID</option>
<option value = "surname">Surname</option>
<option value = "first_name">First name</option>
<option value = "birth_year">Birthday</option>
<option value = "year_of_death">Death</option>
<option value = "country_id">Nationality</option>
</section>></td>
<td><select name="way" id="a">
<option value = "">-- Select ASC/DESC --</option>
<option value = "ASC">Ascend</option>
<option value = "DESC">Descend</option>
</section>></td>
<td><input type="submit" value="Go"></td>
</tr>
</table>
</center>
</body>
</html>