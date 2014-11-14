<?php
include ('models/book_class.php');
?>

<html>
<head>
<title>Add book</title>
</head>

<body>
<a href="index.html"><h3>Back</h3></a>
<center>
<h4>Add book</h4>
<form name="addBook" method="post">
<table>
<tr align="center">
<td>ISBN</td>
<td>Author</td>
<td>Title</td>
<td>Genre</td>
</tr>
<tr align="center">
<td><input type="text" name="isbn" required></td>
<td>
	<select name = "author_id" required>
   		<option value = "">-- Select author --</option>
        <?
        $a = mysql_query("SELECT * FROM authors");
		while ($author = mysql_fetch_array($a))
			//echo '
			//<option value="'.$author['id'].'">'.$author['surname'].' '.$author['first_name'].'</option>
			//';
			echo "<option value = '$author[id]'>$author[surname] $author[first_name]</option>";
		?>
    </section>
</td>
<td><input type="text" name="title" required></td>
<td>
	<select name = "genre_id" required>
   		<option value = "">-- Select genre --</option>
        <?
        $a = mysql_query("SELECT * FROM genres");
		while ($genre = mysql_fetch_array($a))
			echo "<option value = '$genre[id]'>$genre[name]</option>";
		?>
    </section>
</td>
</tr>
<tr align="center">
<td>Pages</td>
<td>Publication year</td>
<td>Publisher</td>
<td>Admission date</td>
</tr>
<tr align="center">
<td><input type="text" name="pages" required></td>
<td><input type="text" name="publication" required></td>
<td>
	<select name = "publisher_id" required>
   		<option value = "">-- Select publisher --</option>
        <?
        $a = mysql_query("SELECT * FROM publishers");
		while ($publisher = mysql_fetch_array($a))
			echo "<option value = '$publisher[id]'>$publisher[name]</option>";
		?>
    </section>
</td>
<td><input type="date" name="date" required></td>
</tr>
</table>
<br>
<input type = "submit" value="Go" name="submitAddingBook">
</form>
</center>
<?php
	if(isset($_REQUEST['submitAddingBook'])) {
	$book['isbn'] = $_POST['isbn'];
	$book['author_id'] = $_POST['author_id'];
	$book['title'] = $_POST['title'];
	$book['genre_id'] = $_POST['genre_id'];
	$book['number_of_pages']  = $_POST['pages'];
	$book['publication_year']  = $_POST['publication'];
	$book['publisher_id']  = $_POST['publisher_id'];
	$book['admission_date'] = $_POST['date'];
	$empty = true;
	
	foreach ($book as $value) {
			if (empty($value)) {
				$empty = false;
				break;
		} 
		if ($empty) {
		$obj = new Book();
		$obj->insert($book);
		}
	}
	}
?>
</body>
</html>