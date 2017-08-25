<?php  include_once('../../includes/all_classes_and_functions.php');  ?>



<?php


if(request_is_post()) {
   
if (isset($_POST['done'])) {
    
    
    $posts->create_post_chat($_POST['message'], $_SESSION['admin_id'], $_POST['group_id']);
    
    
    echo 1;
    
    
}
    
}

















?>