<?php 

 include('includes/db.php');

	$template = $twig->loadTemplate('accueil.html');
	$users  = $forum->selectUsers();

	$topics = $forum-> selectTopics();


	/*$topicsId = $forum-> afficherTopic($id);

	$creatorId = $forum->selectCreatorId($listeTopics);
	$categories = $forum->selectCategoriesTopics($listeTopics);
    
*/
	echo $template->render(['topics' => $topics[0]['title'] ] );

