
      <?php include('includes/db.php');
          
          $template   =  $twig->loadTemplate('messages_user.html');          
          $user   =  $forum->selectUser($_SESSION['users']['id']);
          $messages   =  $forum->selectMessagesUser($_SESSION['users']['id']);

          echo $template->render(['user' => $user, 'messages' => $messages] ); 
          














