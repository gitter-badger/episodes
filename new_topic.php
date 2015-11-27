<?php

include('includes/db.php');


$template 	= $twig->loadTemplate('new_topic.html');
$user  		= $forum->selectUser($_GET['id']);
$topics  	=  $forum->afficherTopicUser($_GET['id']);


echo $template->render([
		'userSession' 	=> $userSession,
		'title' 		=> $title,
		'description' 	=> $description,
		'users' 		=> $users,
		'categorie' 	=> $categorie
		]);

