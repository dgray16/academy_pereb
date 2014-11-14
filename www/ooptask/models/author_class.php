<?php
include_once ("interface.php");
include_once ("library_class.php");

class Author extends Library implements dbFunctions{
	private $id;
	private $surname;
	private $first_name;
	private $birth_year;
	private $year_of_death;
	private $country_id;

function __construct(){
}


public function getId(){
	return $this->id;
}
public function getCountryId(){
	return $this->country_id;
}

public function getSurname(){
	return $this->surname;
}

public function getFirstName(){
	return $this->first_name;
}

public function getBirth(){
	return $this->birth_year;
}

public function getDeath(){
	return $this->year_of_death;
}

public function select(){
	$con = $this->getConnection();
	$query = "SELECT * FROM authors";
	$result = $this->getQueryResult($con, $query);
	?>
<table border="1">
<tr align="center">
	<td>ID</td>
	<td>Surname</td>
	<td>First name</td>
	<td>Birthday</td>
	<td>Death</td>
	<td>Nationality</td>
</tr>

<?php
while($author = mysql_fetch_array($result)){
?>
<tr align="center">
	<td><?print($author['id'])?></td>
	<td><?print($author['surname'])?></td>
	<td><?print($author['first_name'])?></td>
	<td><?print($author['birth_year'])?></td>
	<td><?print($author['year_of_death'])?></td>
	<td><?print($author['country_id'])?></td>
<tr>
<?php
}
?>
</table>
    <?php	
}

public function insert($value) {
	$con = $this->getConnection();
	$query = "INSERT INTO authors VALUES ('', '".$value['surname']."', '".$value['first_name']."', '".$value['birth_year']."', '".$value['year_of_death']."', '".$value['country_id']."')";
	$this->getQueryResult($con, $query);
	print($query);
}

public function search($word) {
	$con = $this->getConnection();
	$query = "SELECT * FROM authors WHERE (surname LIKE '%$word%') OR (first_name LIKE '%$word%')";
	$result = $this->getQueryResult($con, $query);
	?>
    <table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Surname</td>
		<td>First name</td>
		<td>Bitrh</td>
		<td>Death</td>
        <td>Nationality</td>
	</tr>
 
<?php
	while($authors = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($authors['id'])?></td>
			<td><?print($authors['surname'])?></td>
			<td><?print($authors['first_name'])?></td>
			<td><?print($authors['birth_year'])?></td>
			<td><?print($authors['year_of_death'])?></td>
			<td><?print($authors['country_id'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
<?php
	}
	
public function order($row, $way) {
	$con = $this->getConnection();
	$query = "SELECT * FROM authors ORDER BY  `authors`.`$row` $way";
	echo $query;
	$result = $this->getQueryResult($con, $query);
?>
	<table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Surname</td>
		<td>First name</td>
		<td>Bitrh</td>
		<td>Death</td>
        <td>Nationality</td>
	</tr>
 
<?php
	while($authors = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($authors['id'])?></td>
			<td><?print($authors['surname'])?></td>
			<td><?print($authors['first_name'])?></td>
			<td><?print($authors['birth_year'])?></td>
			<td><?print($authors['year_of_death'])?></td>
			<td><?print($authors['country_id'])?></td>
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
	$query = "SELECT id, surname, first_name FROM authors";
	$result = $db->getQueryResult($con,$query);
	print("<select name='authors'>");
	while($author = mysql_fetch_array($result,MYSQL_ASSOC))print 
	("<option value='".$author['id']."'>".$author['surname'].$author['first_name']."</option>>");
	print("</select>");
	$db->closeConnection($result, $con);
}
}
?>