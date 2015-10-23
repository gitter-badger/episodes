<?php 

 include('includes/db.php');

	$template	= $twig -> loadTemplate('topic.html');

	$topicsUser	= $forum -> afficherTopicUser($_GET['id']);
	$topic		= $forum -> afficherTopic($_GET['id']);
	$messages	= $forum -> selectMessages($topics[0]['id']);
	$profil		= $forum -> selectUser($messages[0]['creatorId']);

	echo $template->render([
		'userSession'	=> $forum -> selectUser($_SESSION['users']['id']),
		'profil'		=> $profil, 
		'topic'			=> $topic, 
		'topicsUser'	=> $topicsUser, 
		'categorie'		=> $categorie, 
		'auteurTopic'	=> $auteurTopic, 
		'profil'		=> $profil,
		'messages'		=> $messages,
		'forum'			=> $forum,
		'users'			=> $users
		]);

