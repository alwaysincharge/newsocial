<?php  include_once('../../includes/all_classes_and_functions.php');  ?>

<?php $session->if_not_logged_in($_SESSION['url_placeholder'] . 'login'); ?>






<?php

if(isset($_POST['fetchnew']))  {
    
    $offset = $_POST['offset'];
    
    if ($offset == 0) {
        
        $new_chat_test = $posts->get_very_last_post($_POST['group']); 
        
        $new_chat_test_result = $new_chat_test->get_result();
        
        if ($new_chat_test_result->num_rows > 0)  {
            
            $new_chat = $posts->get_very_last_post($_POST['group']);
            
        } else {
            
            $new_chat = $posts->get_test_post($_POST['group']);
        
        }
        
    } else {
        
        $new_chat = $posts->get_new_chat($offset, $_SESSION['admin_id'], $_POST['group']);
        
    }
    
    
    
    $new_chat_result = $new_chat->get_result();
    
    $rows = array();
    
    while($r = $new_chat_result->fetch_assoc()) {
        
    $rows[] = $r;
        
    }



    echo json_encode(array('new_posts' => $rows));

    
    exit();
    
    
    
    
}

?>