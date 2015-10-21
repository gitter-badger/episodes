 <?php 
         
      
        include('includes/db.php');


         $template = $twig->loadTemplate('header_liste.html');
         $users  = $forum->selectUsers();
         
        echo $template->render(['users' => $users[0]['pseudo'], 'userId'=>$users[0]['id']] );
      
