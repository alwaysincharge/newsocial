<?php  include_once('../../includes/all_classes_and_functions.php');  ?>

<?php $session->if_not_logged_in($_SESSION['url_placeholder'] . 'login'); ?>






<?php

if(isset($_POST['search']))  {
    
    
    if ((strlen(trim($_POST['term']))) == 0) {
        
      
        
    } else {
        
        $new_search = $posts->get_new_search("%" . $_POST['term'] . "%", $_POST['group']);
        
    }
    
    
    
    $new_search_result = $new_search->get_result();
    
    $rows = array();
    
    while($r = $new_search_result->fetch_assoc()) {
        
    $rows[] = $r;
        
    }


// echo $_POST['term'];
    echo json_encode(array('new_search' => $rows));

    
    exit();
    
    
    
    
}

?>