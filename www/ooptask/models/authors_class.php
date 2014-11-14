<?php
include_once ("file:///Z|/home/svitla/www/models/interface.php");
include_once ("file:///Z|/home/svitla/www/models/library_class.php");

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

public function getCityId(){
	return $this->city_id;
}

public function getStreet(){
	return $this->street;
}

public function getZip(){
	return $this->zip;
}

public function select(){
	$con = $this->getConnection();
	$query = "SELECT * FROM addresses";
	$result = $this->getQueryResult($con, $query);
	?>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Country</td>
<td>City</td>
<td>Street</td>
<td>Zip</td>
</tr>

<?php
while($address = mysql_fetch_array($result)){
?>
<tr align="center">
<td><?print($address['id'])?></td>
<td><?print($address['country_id'])?></td>
<td><?print($address['city_id'])?></td>
<td><?print($address['street'])?></td>
<td><?print($address['zip'])?></td>
<tr>
<?php
}
?>
</table>
    <?php	
}

public function insert($value) {
	$con = $this->getConnection();
	$sqlQuery = "INSERT INTO addresses VALUES ('', '".$value['country_id']."', '".$value['city_id']."', '".$value['street_id']."', '".$value['zip']."')";
	$this->getQueryResult($con, $sqlQuery);
	mysql_close($con);
}

public function search($word) {
	}
	
public function order($table, $row, $way) {
	$con = $this->getConnection();
	$sqlQuery = "SELECT * FROM $table ORDER BY  `$table`.`$row` $way";
	echo $sqlQuery;
	$result = $this->getQueryResult($con, $sqlQuery);
?>
	<table border="1">
	<tr align="center">
<td>ID</td>
<td>Country</td>
<td>City</td>
<td>Street</td>
<td>Zip</td>
	</tr>
 
<?php
	while($books = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
<td><?print($address['id'])?></td>
<td><?print($address['country_id'])?></td>
<td><?print($address['city_id'])?></td>
<td><?print($address['street'])?></td>
<td><?print($address['zip'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
<?php
	mysql_close($con);
}

public static function getList(){
	$db = new Library();
	$con = $db->getConnection();
	$query = "SELECT id, street FROM addresses";
	$result = $db->getQueryResult($con,$sqlQuery);
	while($address = mysql_fetch_array($result,MYSQL_ASSOC)) {
		print("<select name='addresses'>");
		print ("<option value=' ".$addresses['id']." '>".$addresses['street']."</option>>");
		print("</select>");
		$db->closeConnection($result, $con);
	}
}
}
?>