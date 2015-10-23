<?php 

 include('includes/db.php');

	$template 	= $twig->loadTemplate('page_profil.html');
	$users  	= $forum->selectUsers();

	$topics 	= $forum-> selectTopics();

	$categories 	= $forum-> selectCategories();

	$categorie = $forum->selectCategoriesTopics($topics[0]['categorieId']);
	$creator = $forum->selectCreatorId($topics[0]['creatorId']);

	$profil = $forum->selectUser($_GET['id']);

	echo $template->render([
		'users' => $users, 
		'categories' => $categories, 
		'topics' => $topics, 
		'categorie'=>$categorie, 
		'creator'=>$creator, 
		'profil' => $profil,
		'forum' => $forum
		]);

