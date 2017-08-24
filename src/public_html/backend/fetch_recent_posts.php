





<?php

if(isset($_POST['felted']))  {
    
    $laminate = $_POST['laminate'];
    
      if ($laminate == 0) {
          
          $query2 = "select * from timeline order by id desc limit 12";
          
      } else {
          
          $query2 = "select * from timeline where id < '{$laminate}' order by id desc limit 12";
          
      }
    
    
    
    $result2 = mysqli_query($connection, $query2);
    
    $row2 = array();
while($r2 = mysqli_fetch_assoc($result2)) {
    $row2[] = $r2;
}



echo json_encode(array('allposts1' => $row2));

    
  /*  while ($row = mysqli_fetch_assoc($result1)) {
        
        echo $row['name'] . "<br>";
        
        
    } */
    
    exit();
    
    
    
    
    
    
}

?>