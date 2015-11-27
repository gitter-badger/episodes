<?php

include('includes/db.php');


$template 	= $twig->loadTemplate('profil_page.html');
$user  = $forum->selectUser($_GET['id']);
$topics  =  $forum->afficherTopicUser($_GET['id']);


echo $template->render([
		'user' => $user,
		'userSession' => $userSession,
		'topics' => $topics
		]);


?>
