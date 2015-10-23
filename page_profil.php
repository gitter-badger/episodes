<?php 

 include('includes/db.php');

	$template 	= $twig->loadTemplate('page_profil.html');

	$profil = $forum->selectUser($_GET['id']);

	echo $template->render([
		'userSession' => $forum->selectUser($_SESSION['users']['id']),
		'profil' => $profil, 
		'categories' => $categories, 
		'topics' => $topics, 
		'categorie'=>$categorie, 
		'creator'=>$creator, 
		'profil' => $profil,
		'forum' => $forum
		]);

