<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->addAuthor($_POST['surname'], $_POST['first_name'], $_POST['birth_year'], $_POST['year_of_death'], $_POST['country_id']);
	header("Location: /authors.php");
?>