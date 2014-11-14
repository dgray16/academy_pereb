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
<title>Add</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Select what to add:</h4>
<select id="options">
<option value="book" id="book">Book</option>
<option value="country">Country</option>
<option value="author">Author</option>
<option value="city">City</option>
<option value="publisher">Publisher</option>
<option value="address">Address</option>
<option value="genre">Genre</option>
</select>
<input type="button" onClick="check()" value="Go">

<table>

<!--tr for Book and Publisher-->
<tr>
	<td>
	<div id="divBook" style="visibility:hidden">
	<form id="bookForm" method="post" name="addBook">

<table>

<tr align="center">
	<td>ISBN</td>
	<td>Author</td>
	<td>Title</td>
	<td>Genre</td>
</tr>

<tr align="center">
	<td><input type="text" name="isbn" required></td>
	<td><?php Author::getList(); ?></td>
	<td><input type="text" name="title" required></td>
	<td><?php Genre::getList(); ?></td>
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
	<td><?php Publisher::getList(); ?></td>
	<td><input type="date" name="date" required></td>
</tr>

</table>

<br>
<input type = "submit" value="Send" name="submitBook">
</form>
</div>
	</td>

	<td>

<div id="divPublisher" style="visibility:hidden">
<form form id="PublisherForm" method="post" name="addPublisher">

<table>
<tr align="center">
	<td>Name</td>
	<td>Address</td>
	<td>Contact person</td>
</tr>

<tr align="center">
	<td><input type="text" name="name" required></td>
	<td><?php Address::getList() ?></td>
<td><input type="text" name="contact_person" required></td>
</tr>

</table>

<br>
<input type = "submit" value="Send" name="submitPublisher">
</form>
</div>

	</td>
<!--end /tr for Book and Publisher-->
</tr>

<tr>
	
    <!--tr for Country and Genre-->
	<td>

<div id="divCountry" style="visibility:hidden">
<form form id="CountryForm" method="post" name="addCountry">

<table>
<tr align="center">
	<td>Name</td>
</tr>

<tr align="center">
	<td><input type="text" name="name" required></td>
</tr>

</table>

<br>
<input type = "submit" value="Send" name="submitCountry">
</form>
</div>

	</td>
    
    <td>
    
<div id="divGenre" style="visibility:hidden">
<form form id="GenreForm" method="post" name="addGenre">

<table>
<tr align="center">
	<td>Name</td>
</tr>

<tr align="center">
	<td><input type="text" name="name" required></td>
</tr>

</table>

<br>
<input type = "submit" value="Send" name="submitGenre">
</form>
</div>

	</td>
    
<!--end /tr for Country and Genre-->
</tr>
<br>
<br>


<!--tr for Author and Address-->
<tr>

	 <td>
    
<div id="divAuthor" style="visibility:hidden">
<form form id="AuthorForm" method="post" name="addAuthor">

<table>

<tr align="center">
	<td>Surname</td>
    <td>First name</td>
    <td>Birth</td>
</tr>

<tr align="center">
	<td><input type="text" name="surname" required></td>
    <td><input type="text" name="first_name" required></td>
    <td><input type="text" name="birth"></td>
</tr>

<tr align="center">
	<td>Death</td>
    <td>Nationality</td>
</tr>

<tr align="center">
	<td><input type="text" name="death" ></td>
    <td><?php Country::getList() ?></td>
</tr>

</table>

<br>
<input type = "submit" value="Send" name="submitAuthor">
</form>
</div>

	</td>
    
    <td>
    
<div id="divAddress" style="visibility:hidden">
<form form id="AddressForm" method="post" name="addAddress">

<table>
<tr align="center">
	<td>Country</td>
    <td>City</td>	
    <td>Street</td>
    <td>ZIP</td>
</tr>

<tr align="center">
	<td><?php Country::getList() ?></td>
    <td><?php City::getList() ?></td
    ><td><input type="text" name="street" required></td
    ><td><input type="text" name="zip" ></td>
</tr>

</table>

<br>
<input type = "submit" value="Send" name="submitAddress">
</form>
</div>

	</td>

<!--end /tr for Author and Address-->
</tr>

<!--tr for City-->
<tr>
	<td>
<div id="divCity" style="visibility:hidden">
<form form id="CityForm" method="post" name="addCity">

<table>
<tr align="center">
    <td>Name</td>
    <td>Country</td>
</tr>

<tr>
	<td><input type="text" name="name" required></td>
    <td><?php Country::getList() ?></td>
</tr>
</table>
<input type = "submit" value="Send" name="submitCity">
</form>
</div>

	</td>
<!--end /tr for City-->
</tr>

</table>

</center> 

<?php
	if(isset($_REQUEST['submitBook'])) {
	$book['isbn'] = $_POST['isbn'];
	$book['author_id'] = $_POST['authors'];
	$book['title'] = $_POST['title'];
	$book['genre_id'] = $_POST['genres'];
	$book['number_of_pages']  = $_POST['pages'];
	$book['publication_year']  = $_POST['publication'];
	$book['publisher_id']  = $_POST['publishers'];
	$book['admission_date'] = $_POST['date'];

	$obj = new Book();
	$obj->insert($book);
	}
	
	if(isset($_REQUEST['submitCountry'])) {
	$country['name'] = $_POST['name']; 
	
	$obj = new Country();
	$obj->insert($country);
	}
	
	if(isset($_REQUEST['submitAddress'])) {
	$address['country_id'] = $_POST['countries']; 
	$address['city_id'] = $_POST['cities'];
	$address['street'] = $_POST['street'];
	$address['zip']  = $_POST['zip'];

	$obj = new Address();
	$obj->insert($address);
	}
	
	if(isset($_REQUEST['submitAuthor'])) {
	$author['surname'] = $_POST['surname']; 
	$author['first_name'] = $_POST['first_name'];
	$author['birth_year'] = $_POST['birth'];
	$author['year_of_death']  = $_POST['death'];
	$author['country_id']  = $_POST['countries'];

	$obj = new Author();
	$obj->insert($author);
	}
	
	if(isset($_REQUEST['submitGenre'])) {
	$genre['name'] = $_POST['name']; 

	$obj = new Genre();
	$obj->insert($genre);
	}
	
	if(isset($_REQUEST['submitCity'])) {
	$city['name'] = $_POST['name']; 
	$city['country_id'] = $_POST['countries'];

	$obj = new City();
	$obj->insert($city);
	}
	
	if(isset($_REQUEST['submitPublisher'])) {
	$publisher['name'] = $_POST['name']; 
	$publisher['address_id'] = $_POST['addresses'];
	$publisher['contact_person'] = $_POST['contact_person'];

	$obj = new Publisher();
	$obj->insert($publisher);
	}
?>

</body>
</html>

<script type="text/javascript">
function check(){
	value = document.getElementById('options').value;
	
	if (value == 'book') {
		document.getElementById('divBook').style.visibility = 'visible';
		
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'publisher') {
		document.getElementById('divPublisher').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'country') {
		document.getElementById('divCountry').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'genre') {
		document.getElementById('divGenre').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}	
	
	if (value == 'author') {
		document.getElementById('divAuthor').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}	
	
	if (value == 'address') {
		document.getElementById('divAddress').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'city') {
		document.getElementById('divCity').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
	}		
}
</script>