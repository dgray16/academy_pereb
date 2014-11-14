<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->deleteGenre($_GET['id']);
	header("Location: /genres.php");
?>