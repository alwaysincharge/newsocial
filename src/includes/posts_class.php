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
    


    
       public function get_new_chat($offset_input, $not_owner_input) {

       global $database;
        
       $stmt = $database->connection->prepare("SELECT * FROM posts where id > ? AND owner != ? limit 20");
        
       $stmt->bind_param("ii", $offset, $not_owner);
        
       $offset = $offset_input;
        
       $not_owner = $not_owner_input;
          
       $stmt->execute();
           
       return $stmt;    

       }
    
    
    
       public function get_first_few_posts() {

       global $database;
        
       $stmt = $database->connection->prepare("SELECT * FROM posts order by id desc limit 12");
          
       $stmt->execute();
           
       return $stmt;    

       }

    
    
    
       public function get_next_few_posts($offset_input) {

       global $database;
        
       $stmt = $database->connection->prepare("SELECT * FROM posts where id < ? order by id desc limit 12");
        
       $stmt->bind_param("i", $offset);
        
       $offset = $offset_input;
           
       $stmt->execute();
           
       return $stmt;    

       }
    
    
    
    
    
       public function insert_attach($path_input, $name_input, $type_input, $post_type_input) {

       global $database;
        
       $stmt = $database->connection->prepare("INSERT INTO posts (attach_path, attach_name, attach_type, type) VALUES ( ?, ?, ?, ?)");
        
       $stmt->bind_param("ssss", $path, $name, $type, $post_type);
        
       $path = $path_input;
           
       $name = $name_input;
           
       $type = $type_input;
           
       $post_type = $post_type_input;
           
       $stmt->execute();
           
       return $stmt;    

       }
    
    
}



$posts = new Posts();









?>