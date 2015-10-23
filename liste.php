  <?php
      
        include('includes/db.php');




         $template = $twig->loadTemplate('user_list.html');
         $users  = $forum->selectUsers();
       
        echo $template->render([
        	'users' => $users,
        	'userSession' => $userSession
        ]);

      
    
