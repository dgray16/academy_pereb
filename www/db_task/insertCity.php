<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->addCity($_POST['name'], $_POST['country_id']);
	header("Location: /cities.php");
?>