  <?php
      
        include('includes/db.php');




         $template = $twig->loadTemplate('page_404.html');
        
       
        echo $template->render(array());

      
    