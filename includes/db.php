<?php

include('Forum.php');

include('twig/lib/Twig/Autoloader.php');

session_start();
$dsn 	='mysql:host=localhost;dbname=episodes';
$user 	='root';
$pass 	='';

$pdo 	= new PDO($dsn, $user, $pass);
$forum 	= new Forum($pdo);

chdir(__DIR__ . '/..');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array());
$twig = new Twig_Environment($loader, array());