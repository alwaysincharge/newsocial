<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ajax";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Your database probably has a syntax error!";
    
}
$string = $_POST['name'];
 //$string = "The http://foo.co.uk/ www.stackoverflow.com/questions/43708954/how-to-get-image-link-from-url http://foo.co.uk/ text you want to filter goes here. http://google.com https://www.youtube.com/watch?v=K_m7NEDMrV0 https://instagram.com/hellow/ www.fridaycamp.com www.w.com http://foo.co.uk/  http://foo.co.uk/";
$url = "/(http\:\/\/|https\:\/\/|ftp\:\/\/|ftps\:\/\/|www\.)[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
preg_match_all($url, $string, $match);
    
    
    $matchUnique = array_unique($match[0]);
    
    
    
    foreach ($matchUnique as $matchUniqueIterate) {
        
        
         if(!isset($urlArrayIndex)) {
             
             $urlArrayIndex = 0;
             
         }
        
        
        if (substr($matchUniqueIterate, 0, 4) === "www.") {
        
             $attach_array[$urlArrayIndex] = str_replace("www.", "http://", $matchUniqueIterate);   
             
             $urlArrayIndex++;
            
        } else {
             
             $attach_array[$urlArrayIndex] = $matchUniqueIterate;  
             
             $urlArrayIndex++;
    } 
        
        
    }
    
if (isset($attach_array))  {
    
    
    echo($attach_array[0]);
    
//   print_r($attach_array); 
    
}
?>