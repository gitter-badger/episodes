  <?php
      
        include('includes/db.php');




         $template = $twig->loadTemplate('user_list.html');
        
       
        echo $template->render([
        	'users' => $users,
        	'userSession' => $userSession
        ]);

      
    
