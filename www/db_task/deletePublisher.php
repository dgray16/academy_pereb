<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->deletePublisher($_GET['id']);
	header("Location: /publishers.php");
?>