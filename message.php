<?php

include('includes/db.php');


if ( empty($_SESSION['users']) ) {
	header('Location: connection.html');
	die();
}

if (!empty($_POST)){

	$forum= new Forum($pdo);

	$reponse= $forum->creerMessage(
	$_SESSION['users']['id'],
	$_GET['id'],
	$_POST['message']
	
	);

}

header('Location:topic.php?id=' . $_GET['id'].'');

// print_r($result);
// die();

?>

