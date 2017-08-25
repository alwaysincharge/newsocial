<?php  include_once('../../includes/all_classes_and_functions.php');  ?>

<?php $session->if_not_logged_in($_SESSION['url_placeholder'] . 'login'); ?>






<?php

if(isset($_POST['fetchold']))  {
    
    
    
      if ($_POST['offset'] == 0) {
          
          $old_posts = $posts->get_first_few_posts();
          
      } else {
          
          $old_posts = $posts->get_next_few_posts($_POST['offset']);
          
      }
    
    
    
          $old_posts_result = $old_posts->get_result();
    
          $row = array();
    
          while($r = $old_posts_result->fetch_assoc()) {
              
          $row[] = $r;
              
          }



    echo json_encode(array('old_posts' => $row));


    
    exit();
    
    
    
    
    
    
    
    
    
    
    
}


?>