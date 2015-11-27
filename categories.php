<?php 

 include('includes/db.php');

	$template 	= $twig->loadTemplate('categories.html');
    $listeTopicsCategorie=$forum->listeTopicsCategorie($_GET['id']);
    $titreCategorie=$forum->afficherCategorie($_GET['id']);  
      
	echo $template->render([
		'listeTopics' => $listeTopicsCategorie,
		'titreCategorie' => $titreCategorie 
		]);
