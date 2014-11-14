<?php
include ('models/book_class.php');
include ('models/address_class.php');
include ('models/author_class.php');
include ('models/city_class.php');
include ('models/country_class.php');
include ('models/publisher_class.php');
include ('models/genre_class.php');
?>

<html>
<head>
<title>Show all</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Select table to show:</h4>
<table>
<tr>
<td><a href='select.php?page=books'>Books</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><a href='select.php?page=addresses'>Addresses</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><a href='select.php?page=authors'>Authors</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><a href='select.php?page=cities'>Cities</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><a href='select.php?page=countries'>Countries</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><a href='select.php?page=genres'>Genres</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><a href='select.php?page=publishers'>Publishers</a></td>
</tr>
</table>


<?php
			$table = $_GET['page'];
				if(isset($_REQUEST['page'])) {
					switch ($_GET['page']) {
						case "books": {	
							$books = new Book();
							$books->select();
							break;
						}
						case "addresses": {	
							$address = new Address();
							$address->select();
							break;
						}
						case "publishers": {	
							$publisher = new Publisher();
							$publisher->select();
							break;
						}
						case "genres": {	
							$genre = new Genre();
							$genre->select();
							break;
						}
						case "cities": {	
							$city = new City();
							$city->select();
							break;
						}
						case "countries": {	
							$country = new Country();
							$country->select();
							break;
						}
						case "authors": {	
							$author = new Author();
							$author->select();
							break;
						}
						default: break;	
						}
				}
			?>
</center> 
</body>
</html>