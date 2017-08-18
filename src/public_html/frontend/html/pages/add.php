<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ajax";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Your database probably has a syntax error!";
    
}
if(isset($_POST['donse']))  {
    
    $path = $_POST['path'];
    
    $name = $_POST['name'];
    
    $type = $_POST['type'];
    
    $posttype = $_POST['posttype'];
    
    
}
        
        
    $query333 = "INSERT INTO timeline (attach_path, attach_name, attach_type, post_type) VALUES ( '{$path}', '{$name}', '{$type}', '{$posttype}')";
         
    $result333 = mysqli_query($connection, $query333);     
         
    echo 23;
         
    
    
    
    
    exit();
    
?>