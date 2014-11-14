<?php
include_once ("interface.php");
include_once ("library_class.php");

class Address extends Library implements dbFunctions{
	private $id;
	private $country_id;
	private $city_id;
	private $street;
	private $zip;

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
	$sqlQuery = "INSERT INTO addresses VALUES ('', '".$value['country_id']."', '".$value['city_id']."', '".$value['street']."', '".$value['zip']."')";
	$this->getQueryResult($con, $sqlQuery);
	mysql_close($con);
}

public function search($word) {
	$con = $this->getConnection();
	$query = "SELECT * FROM addresses WHERE street LIKE '%$word%'";
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
	
public function order($row, $way) {
	$con = $this->getConnection();
	$query = "SELECT * FROM addresses ORDER BY  `addresses`.`$row` $way";
	echo $query;
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
	while($addresses= mysql_fetch_array($result,MYSQL_ASSOC)) {
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
	$result = $db->getQueryResult($con,$query);
		print("<select name='addresses'>");
	while($address = mysql_fetch_array($result,MYSQL_ASSOC)) print 
	("<option value=' ".$address['id']." '>".$address['street']."</option>>");
		print("</select>");
		$db->closeConnection($result, $con);
}
}
?>