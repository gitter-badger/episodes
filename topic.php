<?php 

 include('includes/db.php');

	$template	= $twig -> loadTemplate('topic.html');

	$profil		= $forum -> selectUser($_GET['id']);
	$topicsUser	= $forum -> afficherTopicUser($_GET['id']);
	$topic		= afficherTopic($_GET['id']);
	$messages	= selectMessages($topics[0]['id']);

	echo $template->render([
		'userSession'	=> $forum -> selectUser($_SESSION['users']['id']),
		'profil'		=> $profil, 
		'topics'		=> $topics, 
		'topicsUser'	=> $topicsUser, 
		'categorie'		=> $categorie, 
		'auteurTopic'	=> $auteurTopic, 
		'profil'		=> $profil,
		'messages'		=> $messages,
		'forum'			=> $forum
		]);

