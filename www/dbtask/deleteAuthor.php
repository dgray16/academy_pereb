<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->deleteAuthor($_GET['id']);
	header("Location: /authors.php");
?>