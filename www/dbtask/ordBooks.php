<html>
<head>
<title>Order books</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Order by</h4>
<form action="orderBooks.php" method="post">
<table>
<tr>
<td><select name="row">
<option value = "">-- Select row name --</option>
<option value = "isbn">ISBN</option>
<option value = "author_id">Author</option>
<option value = "title">Title</option>
<option value = "genre_id">Genre</option>
<option value = "number_of_pages">Pages</option>
<option value = "publication_year">Publication year</option>
<option value = "publisher_id">Publisher</option>
<option value = "admission_date">Admission date</option>
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