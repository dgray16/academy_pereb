<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->addCountry($_POST['name']);
	header("Location: /countries.php");
?>