<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->addGenre($_POST['name']);
	header("Location: /genres.php");
?>