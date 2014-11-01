<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->addAddress($_POST['country_id'], $_POST['city_id'], $_POST['street'], $_POST['zip']);
	header("Location: /addresses.php");
?>