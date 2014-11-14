<?php
include_once ("interface.php");
include_once ("library_class.php");

class City extends Library implements dbFunctions{
	private $id;
	private $name;
	private $country_id;

function __construct(){
}


public function getId(){
	return $this->id;
}
public function getCountryId(){
	return $this->country_id;
}

public function getName(){
	return $this->name;
}

public function select(){
	$con = $this->getConnection();
	$query = "SELECT * FROM cities";
	$result = $this->getQueryResult($con, $query);
	?>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Name</td>
<td>Country</td>
</tr>

<?php
while($city = mysql_fetch_array($result)){
?>
<tr align="center">
<td><?print($city['id'])?></td>
<td><?print($city['name'])?></td>
<td><?print($city['country_id'])?></td>
<tr>
<?php
}
?>
</table>
    <?php	
}

public function insert($value) {
	$con = $this->getConnection();
	$query = "INSERT INTO cities VALUES ('', '".$value['name']."', '".$value['country_id']."')";
	$this->getQueryResult($con, $query);
	mysql_close($con);
}

public function search($word) {
	$con = $this->getConnection();
	$query = "SELECT * FROM cities WHERE name LIKE'%$word%'";
	$result = $this->getQueryResult($con, $query);
	?>
    <table border="1">
	<tr align="center">
		<td>ID</td>
        <td>Name</td>
		<td>Country</td>
	</tr>
 
<?php
	while($cities = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($cities['id'])?></td>
			<td><?print($cities['name'])?></td>
            <td><?print($cities['country_id'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
<?php
	}
	
public function order($row, $way) {
	$con = $this->getConnection();
	$query = "SELECT * FROM cities ORDER BY `cities`.`$row` $way";
	echo $query;
	$result = $this->getQueryResult($con, $query);
?>
	<table border="1">
	<tr align="center">
		<td>ID</td>
        <td>Name</td>
		<td>Country</td>
	</tr>
 
<?php
	while($cities = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($cities['id'])?></td>
			<td><?print($cities['name'])?></td>
            <td><?print($cities['country_id'])?></td>
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
	$query = "SELECT id, name FROM cities";
	$result = $db->getQueryResult($con,$query);
	print("<select name='cities'>");
	while($city = mysql_fetch_array($result,MYSQL_ASSOC))print 
	("<option value=' ".$city['id']." '>".$city['name']."</option>>");
	print("</select>");
	$db->closeConnection($result, $con);
	
}
}
?>