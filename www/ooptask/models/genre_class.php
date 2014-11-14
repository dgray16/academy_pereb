<?php
include_once ("interface.php");
include_once ("library_class.php");

class Genre extends Library implements dbFunctions{
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
	$query = "SELECT * FROM genres";
	$result = $this->getQueryResult($con, $query);
	?>
<table border="1">
<tr align="center">
	<td>ID</td>
	<td>Name</td>
</tr>

<?php
while($genre = mysql_fetch_array($result)){
?>
<tr align="center">
	<td><?print($genre['id'])?></td>
	<td><?print($genre['name'])?></td>
<tr>
<?php
}
?>
</table>
    <?php	
}

public function insert($value) {
	$con = $this->getConnection();
	$query = "INSERT INTO genres VALUES ('', '".$value['name']."')";
	$this->getQueryResult($con, $query);
	mysql_close($con);
}

public function search($word) {
	$con = $this->getConnection();
	$query = "SELECT * FROM genres WHERE name LIKE '%$word%'";
	$result = $this->getQueryResult($con, $query);
	?>
    <table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Name</td>
	</tr>
 
<?php
	while($genres = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($genres['id'])?></td>
			<td><?print($genres['name'])?></td>
		</tr>
		<?php 
		} 
		?>
	</table>
<?php
	}
	
public function order($row, $way) {
	$con = $this->getConnection();
	$sqlQuery = "SELECT * FROM genres ORDER BY  `genres`.`$row` $way";
	echo $query;
	$result = $this->getQueryResult($con, $query);
?>
	<table border="1">
	<tr align="center">
		<td>ID</td>
		<td>Name</td>
	</tr>
 
<?php
	while($genres = mysql_fetch_array($result,MYSQL_ASSOC)) {
		?>
		<tr align="center">
			<td><?print($genres['id'])?></td>
			<td><?print($genres['name'])?></td>
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
	$query = "SELECT id, name FROM genres";
	$result = $db->getQueryResult($con,$query);
	print("<select name='genres'>");
	while($genre = mysql_fetch_array($result,MYSQL_ASSOC)) print 
	("<option value='".$genre['id']."'>".$genre['name']."</option>>");
	print("</select>");
	$db->closeConnection($result, $con);
}
}
?>