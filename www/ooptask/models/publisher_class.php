<?php
include_once ("interface.php");
include_once ("library_class.php");

class Publisher extends Library implements dbFunctions{
	private $id;
	private $name;
	private $address_id;
	private $contact_person;
	
function __construct(){
}


public function getId(){
	return $this->id;
}
public function getName(){
	return $this->name;
}

public function getAddressId(){
	return $this->address_id;
}

public function getPerson(){
	return $this->contact_person;
}

public function select(){
	$con = $this->getConnection();
	$query = "SELECT * FROM publishers";
	$result = $this->getQueryResult($con, $query);
	?>
<table border="1">
<tr align="center">
	<td>ID</td>
	<td>Name</td>
	<td>Address ID</td>
	<td>Contact person</td>
</tr>

<?php
while($publisher = mysql_fetch_array($result)){
?>
<tr align="center">
	<td><?print($publisher['id'])?></td>
	<td><?print($publisher['name'])?></td>
	<td><?print($publisher['address_id'])?></td>
	<td><?print($publisher['contact_person'])?></td>
<tr>
<?php
}
?>
</table>
    <?php	
}

public function insert($value) {
	$con = $this->getConnection();
	$query = "INSERT INTO publishers VALUES ('', '".$value['name']."', '".$value['address_id']."', '".$value['contact_person']."')";
	$this->getQueryResult($con, $query);
	mysql_close($con);
}

public function search($word) {
	$con = $this->getConnection();
	$query = "SELECT * FROM publishers WHERE name LIKE '%$word%'";
	$result = $this->getQueryResult($con, $query);
	?>
    <table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Name</td>
		<td>Address</td>
		<td>Contact person</td>
	</tr>
 
<?php
	while($publishers = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($publishers['id'])?></td>
			<td><?print($publishers['name'])?></td>
			<td><?print($publishers['address_id'])?></td>
			<td><?print($publishers['contact_person'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
<?php
	}
	
public function order($row, $way) {
	$con = $this->getConnection();
	$sqlQuery = "SELECT * FROM publishers ORDER BY  `publishers`.`$row` $way";
	echo $query;
	$result = $this->getQueryResult($con, $query);
?>
	<table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Name</td>
		<td>Address</td>
		<td>Contact person</td>
	</tr>
 
<?php
	while($publishers = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($publishers['id'])?></td>
			<td><?print($publishers['name'])?></td>
			<td><?print($publishers['address_id'])?></td>
			<td><?print($publishers['contact_person'])?></td>
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
	$query = "SELECT id, name FROM publishers";
	$result = $db->getQueryResult($con,$query);
	print("<select name='publishers'>");
	while($publisher = mysql_fetch_array($result,MYSQL_ASSOC)) print 
	("<option value='".$publisher['id']."'>".$publisher['name']."</option>>");
	print("</select>");
	$db->closeConnection($result, $con);
}
}
?>