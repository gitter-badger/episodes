<?php

include('Forum.php');

include('twig/lib/Twig/Autoloader.php');

session_start();
$dsn 	='mysql:host=localhost;dbname=episodes';
$user 	='root';
$pass 	='';

$pdo 	= new PDO($dsn, $user, $pass);
$forum 	= new Forum($pdo);

// Liste Users 
$users  	= $forum->selectUsers();
// User Session 
$userSession = $forum->selectUser($_SESSION['users']['id']);
// Liste Topics 
$topics 	= $forum-> selectTopics();
// Auteur Topic
$auteurTopic = $forum->selectCreatorId($topics[0]['creatorId']);
// Liste Categories
$categories 	= $forum-> selectCategories();
// Categorie 
$categorie = $forum->selectCategoriesTopics($topics[0]['categorieId']);



chdir(__DIR__ . '/..');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array());
$twig = new Twig_Environment($loader, array());