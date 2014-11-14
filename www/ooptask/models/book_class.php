<?php
include_once ("interface.php");
include_once ("library_class.php");

class Book extends Library implements dbFunctions{
	private $isbn;
	private $author_id;
	private $title;
	private $genre_id;
	private $number_of_pages;
	private $publication_year;
	private $publisher_id;
	private $admission_date;

function __construct(){
}

public function getISBN(){
	return $this->isbn;
}

public function getAuthorId(){
	return $this->author_id;
}

public function getTitle(){
	return $this->title;
}

public function getGenreId(){
	return $this->genre_id;
}

public function getPages(){
	return $this->number_of_pages;
}

public function getYear(){
	return $this->publication_year;
}

public function getPublisherId(){
	return $this->publisher_id;
}

public function getDate(){
	return $this->admission_date;
}

public function select(){
	$con = $this->getConnection();
	$query = "SELECT * FROM books";
	$result = $this->getQueryResult($con, $query);
	?>
<table border="1">
<tr align="center">
	<td>ISBN</td>
	<td>Author</td>
	<td>Title</td>
	<td>Genre</td>
	<td>Pages</td>
	<td>Publication year</td>
	<td>Publisher</td>
	<td>Admission date</td>
</tr>

<?php
while($books = mysql_fetch_array($result)){
?>
<tr align="center">
	<td><?print($books['isbn'])?></td>
	<td><?print($books['author_id'])?></td>
	<td><?print($books['title'])?></td>
	<td><?print($books['genre_id'])?></td>
	<td><?print($books['number_of_pages'])?></td>
	<td><?print($books['publication_year'])?></td>
	<td><?print($books['publisher_id'])?></td>
	<td><?print($books['admission_date'])?></td>
<tr>
<?php
}
?>
</table>
    <?php	
}

public function insert($value) {
	$con = $this->getConnection();
	$query = "INSERT INTO books VALUES('".$value['isbn']."', '".$value['author_id']."', '".$value['title']."', '".$value['genre_id']."', '".$value['number_of_pages']."', '".$value['publication_year']."', '".$value['publisher_id']."', '".$value['admission_date']."')";
	$this->getQueryResult($con, $query);
}

public function search($word) {
	$con = $this->getConnection();
	$query = "SELECT * FROM books WHERE title LIKE '%$word%'";
	$result = $this->getQueryResult($con, $query);
	?>
    
	<table border="1">
	<tr align="center">
		<td>ISBN</td>
		<td>Author</td>
		<td>Title</td>
		<td>Genre</td>
		<td>Pages</td>
		<td>Publication year</td>
		<td>Publisher</td>
		<td>Admission date</td>
	</tr>
 
<?php
	while($books = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($books['isbn'])?></td>
			<td><?print($books['author_id'])?></td>
			<td><?print($books['title'])?></td>
			<td><?print($books['genre_id'])?></td>
			<td><?print($books['number_of_pages'])?></td>
			<td><?print($books['publication_year'])?></td>
			<td><?print($books['publisher_id'])?></td>
			<td><?print($books['admission_date'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
	<?php
	}
	
public function order($row, $way) {
	$con = $this->getConnection();
	$query = "SELECT * FROM books ORDER BY  `books`.`$row` $way";
	echo $query;
	$result = $this->getQueryResult($con, $query);
?>
	<table border="1">
	<tr align="center">
	<td>ISBN</td>
	<td>Author</td>
	<td>Title</td>
	<td>Genre</td>
	<td>Pages</td>
	<td>Publication year</td>
	<td>Publisher</td>
	<td>Admission date</td>
	</tr>
 
<?php
	while($books = mysql_fetch_array($result, MYSQL_ASSOC)) {
		
		?>
		<tr align="center">
			<td><?php print($books['isbn'])?></td>
			<td><?php print($books['author_id'])?></td>
			<td><?php print($books['title'])?></td>
			<td><?php print($books['genre_id'])?></td>
			<td><?php print($books['number_of_pages'])?></td>
			<td><?php print($books['publication_year'])?></td>
			<td><?php print($books['publisher_id'])?></td>
			<td><?php print($books['admission_date'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
<?php
}


public static function getList(){
	$db = new Library();
	$con = $db->getConnection();
	$query = "SELECT isbn, title FROM books";
	$result = $db->getQueryResult($con,$query);
	print("<select name='books'>");
	while($book = mysql_fetch_array($result,MYSQL_ASSOC)) print 
	("<option value=' ".$book['id']." '>".$book['title']."</option>>");
	print("</select>");
	$db->closeConnection($result, $con);
}
}
?>