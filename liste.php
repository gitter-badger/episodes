  <?php
      
        include('includes/db.php');




         $template = $twig->loadTemplate('liste.html');
         $users  = $forum->selectUsers();
       
        echo $template->render(['users' => $users] );

      
    
