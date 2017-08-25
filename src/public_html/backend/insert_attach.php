<?php  include_once('../../includes/all_classes_and_functions.php');  ?>




<?php

if(isset($_POST['insert_attach']))  {
    
    $path = $_POST['path'];
    
    $name = $_POST['name'];
    
    $type = $_POST['type'];
    
    $posttype = $_POST['posttype'];
    
    
}
        
        
    $posts->insert_attach($path, $name, $type, $posttype);   
         
    echo 1;
         
    exit();
    



?>