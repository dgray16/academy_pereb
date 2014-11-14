<?php
include ('models/book_class.php');
include ('models/address_class.php');
include ('models/author_class.php');
include ('models/city_class.php');
include ('models/country_class.php');
include ('models/publisher_class.php');
include ('models/genre_class.php');

function chooseOption() {
	
		if(isset($_REQUEST['submitValue']) && !empty($_REQUEST['value'])) {
			$word = $_POST['value'];
			/*echo "<script type='text/javascript'>alert('$temp');</script>";*/
			switch($_POST['search']) {
				case "book": {
				$books = new Book();
				$books->search($word);
				break;
				}
				
				case "country": {
				$countries = new Country();
				$countries->search($word);
				break;
				}
				
				case "author": {
				$authors = new Author();
				$authors->search($word);
				break;
				}
				
				case "city": {
				$cities = new City();
				$cities->search($word);
				break;
				}
				
				case "publisher": {
				$publishers = new Publisher();
				$publishers->search($word);
				break;
				}
				
				case "address": {
				$addresses = new Address();
				$addresses->search($word);
				break;
				}
				
				case "genre": {
				$genres = new Genre();
				$genres->search($word);
				break;
				}
				
				default: break;
			}
		}
	}
?>

<html>
<head>
<title>Search</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>    
<form method="post"> 
				<h4>Select table: </h4>
                <select name="search">
				<option value="book">Book</option>
				<option value="country">Country</option>
				<option value="author">Author</option>
				<option value="city">City</option>
				<option value="publisher">Publisher</option>
				<option value="address">Address</option>
				<option value="genre">Genre</option>
				</select>
                
				<h4>Input value: </h4>
                <input type="text" name="value">
                
				<input type="submit" name="submitValue" value="Search">
			</form>
<?php chooseOption(); ?>
</center> 
</body>
</html>