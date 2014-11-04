<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->addBook($_POST['isbn'], $_POST['author_id'], $_POST['title'], $_POST['genre_id'], $_POST['pages'], $_POST['publication'], $_POST['publisher_id'], $_POST['date']);
	header("Location: /books.php");
?>