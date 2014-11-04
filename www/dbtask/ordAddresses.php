<html>
<head>
<title>Order addresses</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Order by</h4>
<form action="orderAddresses.php" method="post">
<table>
<tr>
<td><select name="row">
<option value = "">-- Select row name --</option>
<option value = "id">ID</option>
<option value = "country_id">Country</option>
<option value = "city_id">City</option>
<option value = "street">Street</option>
<option value = "zip">ZIP</option>
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