<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->deleteAddress($_GET['id']);
	header("Location: /addresses.php");
?>