<?php 

 include('includes/db.php');

	$template 	= $twig->loadTemplate('accueil.html');

	echo $template->render([
		'userSession' => $userSession,
		'categories' => $categories, 
		'topics' => $topics, 
		'categorie'=>$categorie, 
		'creator'=>$auteurTopic, 
		'forum' => $forum
		]);

