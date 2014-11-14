<?php
class Library {
	public function getConnection(){
		include ("/../config/config.php");
		$connect = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db($dbname,$connect);
		return $connect;
	}
	public function getQueryResult($connection ,$sqlQuery) {
        return mysql_query($sqlQuery);
	}
    public function closeConnection($result, $connect) {
		mysql_free_result($result);
		mysql_close($connect);
	}
}
?>