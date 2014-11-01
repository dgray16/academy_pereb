<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->deleteCountry($_GET['id']);
	header("Location: /countries.php");
?>