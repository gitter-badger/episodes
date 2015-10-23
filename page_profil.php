<?php 

 include('includes/db.php');

	$template 	= $twig->loadTemplate('page_profil.html');

	$profil = $forum->selectUser($_GET['id']);
	$topicsUser = $forum->afficherTopicUser($_GET['id']);

	echo $template->render([
		'userSession' => $forum->selectUser($_SESSION['users']['id']),
		'profil' => $profil, 
		'topics'=>$topics, 
		'topicsUser' => $topicsUser, 
		'categorie'=>$categorie, 
		'auteurTopic'=>$auteurTopic, 
		'profil' => $profil,
		'forum' => $forum
		]);
