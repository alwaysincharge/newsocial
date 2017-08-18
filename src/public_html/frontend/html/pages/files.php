<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ajax";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Your database probably has a syntax error!";
    
}
    $fileName = $_FILES['file1']['name'];
    $fileTmpLoc = $_FILES['file1']['tmp_name'];
    $fileType = $_FILES['file1']['type'];
    $fileSize = $_FILES['file1']['size'];
    $fileerrorMsg = $_FILES['file1']['error'];
    
    
    $filePath = 'show/' . $fileName;
     if  (move_uploaded_file($fileTmpLoc, 'show/' . $fileName)) {
        
        
  //  $query33 = "INSERT INTO timeline (attach_path, attach_name, attach_type, post_type) VALUES ( '{$filePath}', '{$fileName}', '{$fileType}', 'attach')";
         
  //  $result33 = mysqli_query($connection, $query33);     
         
         
    $attach_array = array("attach_path"=> $filePath, "attach_name"=> $fileName, "attach_type"=>$fileType, "post_type"=>"attach");     
    
    echo json_encode(array_values($attach_array));
         
    }
    
    
    
    exit();
    
?>