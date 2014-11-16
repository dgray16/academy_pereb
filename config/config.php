<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'library';
$connect = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);
?>