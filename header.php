<?php 

    include('includes/db.php');

$template = $twig->loadTemplate('header.html');
         $users  = $forum->selectUsers();
         
        echo $template->render([
        	'users' => $users[0]['pseudo'], 
        	'userId'=>$users[0]['id'], 
        	'avatar' => $users[0]['avatar']
        	]);
      
