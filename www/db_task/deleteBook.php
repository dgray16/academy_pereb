<?
	require_once("class.php");
	$obj1 = new library();
	$obj1->deleteBook($_GET['isbn']);
	header("Location: /books.php");
?>