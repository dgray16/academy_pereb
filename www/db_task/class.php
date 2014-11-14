<?php
class library {
	function __construct(){
		$this->connection = mysql_connect('localhost', 'root', '') or die (mysql_error);
		mysql_select_db('library', $this->connection);
	}
	
	function __destruct(){
		mysql_close($this->connection);
	}
	
	function getBooks(){
		$this->query = "SELECT * FROM books";
		$this->u = mysql_query($this->query);
		while ($this->books = mysql_fetch_array($this->u)){
?>


<tr align="center">
<td><?php echo $this->books['isbn']?></td>
<td><?php echo $this->books['author_id']?></td>  
<td><?php echo $this->books['title']?></td>  
<td><?php echo $this->books['genre_id']?></td>  
<td><?php echo $this->books['number_of_pages']?></td>  
<td><?php echo $this->books['publication_year']?></td>  
<td><?php echo $this->books['publisher_id']?></td>  
<td><?php echo $this->books['admission_date']?></td>    
<td><a href = "deleteBook.php?isbn=<?echo $this->books['isbn']?>" title="Delete row">X</a></td>   
</tr> 
<?php  
		}
	}

function getAuthors(){
	$this->query = "SELECT * FROM authors";
	$this->u = mysql_query($this->query);
	while ($this->authors = mysql_fetch_array($this->u)){
?>
<tr align="center">
<td><?php echo $this->authors['id']?></td>
<td><?php echo $this->authors['surname']?></td>  
<td><?php echo $this->authors['first_name']?></td>  
<td><?php echo $this->authors['birth_year']?></td>  
<td><?php echo $this->authors['year_of_death']?></td>  
<td><?php echo $this->authors['country_id']?></td>   
<td><a href = "deleteAuthor.php?id=<?echo $this->authors['id']?>" title="Delete row">X</a></td>   
</tr> 
<?php  
		}
	}
	
	function getPublishers(){
	$this->query = "SELECT * FROM publishers";
	$this->u = mysql_query($this->query);
	while ($this->publishers = mysql_fetch_array($this->u)){
?>
<tr align="center">
<td><?php echo $this->publishers['id']?></td>
<td><?php echo $this->publishers['name']?></td>  
<td><?php echo $this->publishers['address_id']?></td>  
<td><?php echo $this->publishers['contact_person']?></td>  
<td><a href = "deletePublisher.php?id=<?echo $this->publishers['id']?>" title="Delete row">X</a></td>
</tr> 
<?php  
		}
	}
	
function getGenres(){
	$this->query = "SELECT * FROM genres";
	$this->u = mysql_query($this->query);
	while ($this->genres = mysql_fetch_array($this->u)){
?>
<tr align="center">
<td><?php echo $this->genres['id']?></td>
<td><?php echo $this->genres['name']?></td>  
<td><a href = "deleteGenre.php?id=<?echo $this->genres['id']?>" title="Delete row">X</a></td>  
</tr> 
<?php  
		}
	}
	
	function getAdresses(){
	$this->query = "SELECT * FROM addresses";
	$this->u = mysql_query($this->query);
	while ($this->addresses = mysql_fetch_array($this->u)){
?>
<tr align="center">
<td><?php echo $this->addresses['id']?></td>
<td><?php echo $this->addresses['country_id']?></td>  
<td><?php echo $this->addresses['city_id']?></td>  
<td><?php echo $this->addresses['street']?></td>    
<td><?php echo $this->addresses['zip']?></td>  
<td><a href = "deleteAddress.php?id=<?echo $this->addresses['id']?>" title="Delete row">X</a></td> 
</tr> 
<?php  
		}
	}
	
function getCountries(){
	$this->query = "SELECT * FROM countries";
	$this->u = mysql_query($this->query);
	while ($this->countries = mysql_fetch_array($this->u)){
?>
<tr align="center">
<td><?php echo $this->countries['id']?></td>
<td><?php echo $this->countries['name']?></td>  
<td><a href = "deleteCountry.php?id=<?echo $this->countries['id']?>" title="Delete row">X</a></td>  
</tr> 
<?php  
		}
	}

function getCities(){
	$this->query = "SELECT * FROM cities";
	$this->u = mysql_query($this->query);
	while ($this->cities = mysql_fetch_array($this->u)){
?>
<tr align="center">
<td><?php echo $this->cities['id']?></td>
<td><?php echo $this->cities['name']?></td> 
<td><?php echo $this->cities['country_id']?></td>
<td><a href = "deleteCity.php?id=<?echo $this->cities['id']?>" title="Delete row">X</a></td>   
</tr> 
<?php  
		}
	}


function deleteBook($isbn) {
		mysql_query("DELETE FROM books WHERE isbn = $isbn");
	}
	
function deleteAuthor($id) {
		mysql_query("DELETE FROM authors WHERE id = $id");
	}
	
function deleteGenre($id) {
		mysql_query("DELETE FROM genres WHERE id = $id");
	}
	
function deletePublisher($id) {
		mysql_query("DELETE FROM publishers WHERE publisher_id = $id");
	}
	
function deleteAddress($id) {
		mysql_query("DELETE FROM addresses WHERE address_id = $id");
	}
	
function deleteCountry($id) {
		mysql_query("DELETE FROM countries WHERE id = $id");
	}
	
function deleteCity($id) {
		mysql_query("DELETE FROM cities WHERE id = $id");
	}
	
	
function addBook($isbn, $author, $title, $genre, $pages, $year, $publisher, $date){
	mysql_query("INSERT INTO books VALUES ('$isbn', '$author', '$title', '$genre', '$pages', '$year', '$publisher', '$date')");
}

function addAuthor($surname, $first, $birth, $death, $country){
	mysql_query("INSERT INTO authors VALUES ('', '$surname', '$first', '$birth', '$death', '$country')");
}

function addGenre($name){
	mysql_query("INSERT INTO genres VALUES ('', '$name')");
}

function addPublisher($name, $address, $contact){
	mysql_query("INSERT INTO publishers VALUES ('', '$name', '$address', '$contact')");
}

function addAddress($country, $city, $street, $zip){
	mysql_query("INSERT INTO addresses VALUES ('', '$country', '$city', '$street', '$zip')");
}

function addCountry($name){
	mysql_query("INSERT INTO countries VALUES ('', '$name')");
}

function addCity($name, $country){
	mysql_query("INSERT INTO cities VALUES ('', '$name', '$country')");
}


function searchBook($title) {
	$this->query = "SELECT * FROM books WHERE title LIKE '%$title%'";
	$this->u = mysql_query($this->query);
	while ($this->books = mysql_fetch_array($this->u)){
?>
    <tr align="center">
	<td><?php echo $this->books['isbn']?></td>
	<td><?php echo $this->books['author_id']?></td>  
	<td><?php echo $this->books['title']?></td>  
	<td><?php echo $this->books['genre_id']?></td>  
	<td><?php echo $this->books['number_of_pages']?></td>  
	<td><?php echo $this->books['publication_year']?></td>  
	<td><?php echo $this->books['publisher_id']?></td>  
	<td><?php echo $this->books['admission_date']?></td>  
	</tr> 
<?php  
		}
	}
	
function searchAuthor($name) {
	$this->query = "SELECT * FROM authors WHERE (surname LIKE '%$name%') OR (first_name LIKE '%$name%')";
	$this->u = mysql_query($this->query);
	while ($this->authors = mysql_fetch_array($this->u)){
?>
<tr align="center">
<td><?php echo $this->authors['id']?></td>
<td><?php echo $this->authors['surname']?></td>  
<td><?php echo $this->authors['first_name']?></td>  
<td><?php echo $this->authors['birth_year']?></td>  
<td><?php echo $this->authors['year_of_death']?></td>  
<td><?php echo $this->authors['country_id']?></td>    
</tr> 
<?php  
		}
	}
	
function searchGenre($name) {
	$this->query = "SELECT * FROM genres WHERE name LIKE '%$name%'";
	$this->u = mysql_query($this->query);
	while ($this->genres = mysql_fetch_array($this->u)){
?>
    <tr align="center">
<td><?php echo $this->genres['id']?></td>
<td><?php echo $this->genres['name']?></td>   
	</tr> 
<?php  
		}
	}
	
function searchPublisher($name) {
	$this->query = "SELECT * FROM publishers WHERE name LIKE '%$name%'";
	$this->u = mysql_query($this->query);
	while ($this->publishers = mysql_fetch_array($this->u)){
?>
    <tr align="center">
<td><?php echo $this->publishers['id']?></td>
<td><?php echo $this->publishers['name']?></td>  
<td><?php echo $this->publishers['address_id']?></td>  
<td><?php echo $this->publishers['contact_person']?></td>  
	</tr> 
<?php  
		}
	}

function searchAddress($street) {
	$this->query = "SELECT * FROM addresses WHERE street LIKE '%$street%'";
	$this->u = mysql_query($this->query);
	while ($this->addresses = mysql_fetch_array($this->u)){
?>
    <tr align="center">
<td><?php echo $this->addresses['id']?></td>
<td><?php echo $this->addresses['country_id']?></td>  
<td><?php echo $this->addresses['city_id']?></td>  
<td><?php echo $this->addresses['street']?></td>    
<td><?php echo $this->addresses['zip']?></td>   
	</tr> 
<?php  
		}
	}
	
function searchCountry($name) {
	$this->query = "SELECT * FROM countries WHERE name LIKE '%$name%'";
	$this->u = mysql_query($this->query);
	while ($this->countries = mysql_fetch_array($this->u)){
?>
    <tr align="center">
<td><?php echo $this->countries['id']?></td>
<td><?php echo $this->countries['name']?></td>  
	</tr> 
<?php  
		}
	}
	
function searchCity($name) {
	$this->query = "SELECT * FROM cities WHERE name LIKE '%$name%'";
	$this->u = mysql_query($this->query);
	while ($this->cities = mysql_fetch_array($this->u)){
?>
    <tr align="center">
<td><?php echo $this->cities['id']?></td>
<td><?php echo $this->cities['name']?></td>  
<td><?php echo $this->cities['country_id']?></td>  
	</tr> 
<?php  
		}
	}

	
function orderBooks($row, $way) {
	$this->query = "SELECT * FROM books ORDER BY  `books`.`$row` $way";
	$this->u = mysql_query($this->query);
	?>
    <center>
    <?php
		echo $this->query;
	?>
    </center>
    <?php
	while ($this->books = mysql_fetch_array($this->u)){
?>
    <br>
    <tr align="center">
	<td><?php echo $this->books['isbn']?></td>
	<td><?php echo $this->books['author_id']?></td>  
	<td><?php echo $this->books['title']?></td>  
	<td><?php echo $this->books['genre_id']?></td>  
	<td><?php echo $this->books['number_of_pages']?></td>  
	<td><?php echo $this->books['publication_year']?></td>  
	<td><?php echo $this->books['publisher_id']?></td>  
	<td><?php echo $this->books['admission_date']?></td>  
	</tr> 
<?php  
		}
	}
	
function orderAuthors($row, $way) {
	$this->query = "SELECT * FROM authors ORDER BY  `authors`.`$row` $way";
	$this->u = mysql_query($this->query);
	?>
    <center>
    <?php
		echo $this->query;
	?>
    </center>
    <?php
	while ($this->authors = mysql_fetch_array($this->u)){
?>
    <br>
<tr align="center">
<td><?php echo $this->authors['id']?></td>
<td><?php echo $this->authors['surname']?></td>  
<td><?php echo $this->authors['first_name']?></td>  
<td><?php echo $this->authors['birth_year']?></td>  
<td><?php echo $this->authors['year_of_death']?></td>  
<td><?php echo $this->authors['country_id']?></td>    
</tr> 
<?php  
		}
	}
	
function orderGenres($row, $way) {
	$this->query = "SELECT * FROM genres ORDER BY  `genres`.`$row` $way";
	$this->u = mysql_query($this->query);
	?>
    <center>
    <?php
		echo $this->query;
	?>
    </center>
    <?php
	while ($this->genres = mysql_fetch_array($this->u)){
?>
    <br>
    <tr align="center">
<td><?php echo $this->genres['id']?></td>
<td><?php echo $this->genres['name']?></td>  
	</tr> 
<?php  
		}
	}
	
function orderPublishers($row, $way) {
	$this->query = "SELECT * FROM publishers ORDER BY  `publishers`.`$row` $way";
	$this->u = mysql_query($this->query);
	?>
    <center>
    <?php
		echo $this->query;
	?>
    </center>
    <?php
	while ($this->publishers = mysql_fetch_array($this->u)){
?>
    <br>
    <tr align="center">
<td><?php echo $this->publishers['id']?></td>
<td><?php echo $this->publishers['name']?></td>  
<td><?php echo $this->publishers['address_id']?></td>  
<td><?php echo $this->publishers['contact_person']?></td>  
	</tr> 
<?php  
		}
	}
	
function orderAddresses($row, $way) {
	$this->query = "SELECT * FROM addresses ORDER BY  `addresses`.`$row` $way";
	$this->u = mysql_query($this->query);
	?>
    <center>
    <?php
		echo $this->query;
	?>
    </center>
    <?php
	while ($this->addresses = mysql_fetch_array($this->u)){
?>
    <br>
    <tr align="center">
<td><?php echo $this->addresses['id']?></td>
<td><?php echo $this->addresses['country_id']?></td>  
<td><?php echo $this->addresses['city_id']?></td>  
<td><?php echo $this->addresses['street']?></td>    
<td><?php echo $this->addresses['zip']?></td> 
	</tr> 
<?php  
		}
	}
	
function orderCountries($row, $way) {
	$this->query = "SELECT * FROM countries ORDER BY  `countries`.`$row` $way";
	$this->u = mysql_query($this->query);
	?>
    <center>
    <?php
		echo $this->query;
	?>
    </center>
    <?php
	while ($this->countries = mysql_fetch_array($this->u)){
?>
    <br>
    <tr align="center">
<td><?php echo $this->countries['id']?></td>
<td><?php echo $this->countries['name']?></td>  
	</tr> 
<?php  
		}
	}
	
function orderCities($row, $way) {
	$this->query = "SELECT * FROM cities ORDER BY  `cities`.`$row` $way";
	$this->u = mysql_query($this->query);
	?>
    <center>
    <?php
		echo $this->query;
	?>
    </center>
    <?php
	while ($this->cities = mysql_fetch_array($this->u)){
?>
    <br>
    <tr align="center">
<td><?php echo $this->cities['id']?></td>
<td><?php echo $this->cities['name']?></td>  
<td><?php echo $this->cities['country_id']?></td>  
	</tr> 
<?php  
		}
	}
}
 ?>
