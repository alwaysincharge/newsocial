<?php

require_once('database_class.php');

class Posts {
    

    
       public function create_post_chat($message_input, $owner_input) {

       global $database;
        
       $stmt = $database->connection->prepare("INSERT INTO posts (message, owner, deleted, type) VALUES (?, ?, ?, ?)");
        
       $stmt->bind_param("siss", $message, $owner, $deleted, $type);
        
       $message = $message_input;
        
       $owner = $owner_input;
           
       $deleted = "live";   
           
       $type = "chat";
          
       $stmt->execute();
           
       return $stmt;    

       }
    



}



$posts = new Posts();









?>