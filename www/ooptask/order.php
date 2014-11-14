<?php
include ('models/book_class.php');
include ('models/address_class.php');
include ('models/author_class.php');
include ('models/city_class.php');
include ('models/country_class.php');
include ('models/publisher_class.php');
include ('models/genre_class.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Order</title>
	</head>
	<body>
    <a href="index.php"><h3>Back</h3></a>

    <center>
			<form name="orderForm" method="post">
            
				<h4>Select what to order:</h4>
                
                <select id="options" name="tables">
				<option value="books" id="book">Book</option>
				<option value="countries">Country</option>
				<option value="authors">Author</option>
				<option value="cities">City</option>
				<option value="publishers">Publisher</option>
				<option value="addresses">Address</option>
				<option value="genres">Genre</option>
				</select>

				<input type="button" onClick="check()" value="Show">
                
                
       		<div id="divBook" style="visibility:hidden">

<table>

<tr>

	<td>
		<select name="row1">
		<option>-- Select row name --</option>
		<option value = "isbn">ISBN</option>
		<option value = "author_id">Author</option>
		<option value = "title">Title</option>
		<option value = "genre_id">Genre</option>
		<option value = "number_of_pages">Pages</option>
		<option value = "publication_year">Publication year</option>
		<option value = "publisher_id">Publisher</option>
		<option value = "admission_date">Admission date</option>
		</select>
	</td>

	<td>
		<select name="way1" id="a">
		<option value = "">-- Select ASC/DESC --</option>
		<option value = "ASC">Ascend</option>
		<option value = "DESC">Descend</option>
		</select>
	</td>

	<td>
		<input type="submit" value="Go" name="orderBook">
	</td>

</tr>
</table>
</div>

	</td>

	<td>

<div id="divPublisher" style="visibility:hidden">
<table>
<tr>
	<td>
    	<select name="row2">
		<option>-- Select row name --</option>
		<option value="id">ID</option>
		<option value="name">Name</option>
		<option value="address_id">Address</option>
		<option value="contact_person">Contact person</option>
		</section>
	</td>
    
	<td>
		<select name="way2" id="a">
		<option value = "">-- Select ASC/DESC --</option>
		<option value = "ASC">Ascend</option>
		<option value = "DESC">Descend</option>
		</section>>
	</td>
    
	<td>
    <input type="submit" value="Go" name="orderPublisher">
    </td>
</tr>
</table>

</div>

	</td>
    
	<td>

<div id="divGenre" style="visibility:hidden">
<table>
<tr>
	<td>
    	<select name="row3">
		<option>-- Select row name --</option>
		<option value="id">ID</option>
		<option value="name">Name</option>
		</section>
	</td>
    
	<td>
		<select name="way3" id="a">
		<option value = "">-- Select ASC/DESC --</option>
		<option value = "ASC">Ascend</option>
		<option value = "DESC">Descend</option>
		</section>>
	</td>
    
	<td>
    <input type="submit" value="Go" name="orderGenre">
    </td>
</tr>
</table>

</div>

	</td>
    
    <td>

<div id="divAddress" style="visibility:hidden">
<table>
<tr>
	<td>
    	<select name="row4">
		<option>-- Select row name --</option>
		<option value="id">ID</option>
        <option value="country_id">Country</option>
		<option value="city_id">City</option>
        <option value="street">Street</option>
        <option value="zip">ZIP</option>
		</section>
	</td>
    
	<td>
		<select name="way4" id="a">
		<option value = "">-- Select ASC/DESC --</option>
		<option value = "ASC">Ascend</option>
		<option value = "DESC">Descend</option>
		</section>>
	</td>
    
	<td>
    <input type="submit" value="Go" name="orderAddress">
    </td>
</tr>
</table>
    
    </td>
    
    <td>

<div id="divCity" style="visibility:hidden">
<table>
<tr>
	<td>
    	<select name="row5">
		<option>-- Select row name --</option>
		<option value="id">ID</option>
        <option value="name">Name</option>
        <option value="country_id">Country</option>
		</section>
	</td>
    
	<td>
		<select name="way5" id="a">
		<option value = "">-- Select ASC/DESC --</option>
		<option value = "ASC">Ascend</option>
		<option value = "DESC">Descend</option>
		</section>>
	</td>
    
	<td>
    <input type="submit" value="Go" name="orderCity">
    </td>
</tr>
</table>
    
    </td>
    
</tr>
</table>

</div>

	</td>
    
	<td>

<div id="divAuthor" style="visibility:hidden">
<table>
<tr>
	<td>
    	<select name="row6">
		<option>-- Select row name --</option>
		<option value="id">ID</option>
        <option value="surname">Surname</option>
        <option value="first_name">First name</option>
        <option value="birth_year">Birthday</option>
        <option value="year_of_death">Death</option>
        <option value="country_id">Nationality</option>
		</section>
	</td>
    
	<td>
		<select name="way6" id="a">
		<option value = "">-- Select ASC/DESC --</option>
		<option value = "ASC">Ascend</option>
		<option value = "DESC">Descend</option>
		</section>>
	</td>
    
	<td>
    <input type="submit" value="Go" name="orderAuthor">
    </td>
</tr>
</table>
    
    </td>
    
</tr>
</table>

</div>

	</td>
    
    <td>

<div id="divCountry" style="visibility:hidden">
<table>
<tr>
	<td>
    	<select name="row7">
		<option>-- Select row name --</option>
		<option value="id">ID</option>
        <option value="name">Name</option>
		</section>
	</td>
    
	<td>
		<select name="way7" id="a">
		<option value = "">-- Select ASC/DESC --</option>
		<option value = "ASC">Ascend</option>
		<option value = "DESC">Descend</option>
		</section>>
	</td>
    
	<td>
    <input type="submit" value="Go" name="orderCountry">
    </td>
</tr>
</table>
    
    </td>
    
</tr>
</table>

</div>

	</td>


</tr>
</table>
</form>
	<!--HERE ARE ALL INVISIVLE! I don`t know why-->
        </center>
        
        <center>
        <?php  
		if(isset($_REQUEST['orderBook'])) {
			$way = $_POST['way1'];
			$row = $_POST['row1'];
			$books = new Book();
			$books->order($row, $way);
			}
			
			if(isset($_REQUEST['orderGenre'])) {
			$way = $_POST['way3'];
			$row = $_POST['row3'];
			$genres = new Genre();
			$genres->order($row, $way);
			}
			
			if(isset($_REQUEST['orderCountry'])) {
			$way = $_POST['way7'];
			$row = $_POST['row7'];
			$countries = new Country();
			$countries->order($row, $way);
			}
			
			if(isset($_REQUEST['orderAuthor'])) {
			$way = $_POST['way6'];
			$row = $_POST['row6'];
			$authors = new Author();
			$authors->order($row, $way);
			}
			
			if(isset($_REQUEST['orderCity'])) {
			$way = $_POST['way5'];
			$row = $_POST['row5'];
			$cities = new City();
			$cities->order($row, $way);
			}
			
			if(isset($_REQUEST['orderPublisher'])) {
			$way = $_POST['way2'];
			$row = $_POST['row2'];
			$publishers = new Publisher();
			$publishers->order($row, $way);
			}
			
			if(isset($_REQUEST['orderAddress'])) {
			$way = $_POST['way4'];
			$row = $_POST['row4'];
			$addresses = new Address();
			$addresses->order($row, $way);
			}
		?>
        </center>
	</body>
</html>

<script type="text/javascript">
function check(){
	value = document.getElementById('options').value;
	
	if (value == 'books') {
		document.getElementById('divBook').style.visibility = 'visible';
		
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'publishers') {
		document.getElementById('divPublisher').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'countries') {
		document.getElementById('divCountry').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'genres') {
		document.getElementById('divGenre').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}	
	
	if (value == 'authors') {
		document.getElementById('divAuthor').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divAddress').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}	
	
	if (value == 'addresses') {
		document.getElementById('divAddress').style.visibility = 'visible';
		
		document.getElementById('divBook').style.visibility = 'hidden';
		document.getElementById('divPublisher').style.visibility = 'hidden';
		document.getElementById('divCountry').style.visibility = 'hidden';
		document.getElementById('divGenre').style.visibility = 'hidden';
		document.getElementById('divAuthor').style.visibility = 'hidden';
		document.getElementById('divCity').style.visibility = 'hidden';
	}
	
	if (value == 'cities') {
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