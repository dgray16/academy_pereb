<?php
include_once ("interface.php");
include_once ("library_class.php");

class Country extends Library implements dbFunctions{
	private $id;
	private $name;

function __construct(){
}


public function getId(){
	return $this->id;
}
public function getName(){
	return $this->name;
}


public function select(){
	$con = $this->getConnection();
	$query = "SELECT * FROM countries";
	$result = $this->getQueryResult($con, $query);
	?>
<table border="1">
<tr align="center">
<td>ID</td>
<td>Name</td>
</tr>

<?php
while($country = mysql_fetch_array($result)){
?>
<tr align="center">
<td><?print($country['id'])?></td>
<td><?print($country['name'])?></td>
<tr>
<?php
}
?>
</table>
    <?php	
}

public function insert($value) {
	$con = $this->getConnection();
	$query = "INSERT INTO countries VALUES ('', '".$value['name']."')";
	$this->getQueryResult($con, $query);
	mysql_close($con);
}

public function search($word) {
	$con = $this->getConnection();
	$query = "SELECT * FROM countries WHERE name LIKE'%$word%'";
	$result = $this->getQueryResult($con, $query);
	?>
    <table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Name</td>
	</tr>
 
<?php
	while($countries = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($countries['id'])?></td>
			<td><?print($countries['name'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
<?php
	}
	
public function order($row, $way) {
	$con = $this->getConnection();
	$query = "SELECT * FROM countries ORDER BY  `countries`.`$row` $way";
	echo $query;
	$result = $this->getQueryResult($con, $query);
?>
	<table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Name</td>
	</tr>
 
<?php
	while($countries = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($countries['id'])?></td>
			<td><?print($countries['name'])?></td>
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
	$query = "SELECT * FROM countries";
	$result = $db->getQueryResult($con,$query);
	print("<select name='countries'>");
	while($country = mysql_fetch_array($result,MYSQL_ASSOC))print 
	("<option value='".$country['id']."'>".$country['name']."</option>>");
	print("</select>");
	$db->closeConnection($result, $con);
	
}
}
?>