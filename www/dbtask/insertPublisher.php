<?
	require_once("class.php");
	$obj3 = new library();
	$obj3->addPublisher($_POST['name'], $_POST['address_id'], $_POST['contact_person']);
	header("Location: /publishers.php");
?>