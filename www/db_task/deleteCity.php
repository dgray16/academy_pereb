<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->deleteCity($_GET['id']);
	header("Location: /cities.php");
?>