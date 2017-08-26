<?php

require_once('database_class.php');

class Posts {
    

    
       public function create_post_chat($message_input, $owner_input, $group_input) {

       global $database;
        
       $stmt = $database->connection->prepare("INSERT INTO posts (message, owner, group_id, deleted, type) VALUES (?, ?, ?, ?, ?)");
        
       $stmt->bind_param("siiss", $message, $owner, $group, $deleted, $type);
        
       $message = $message_input;
        
       $owner = $owner_input;
           
       $group = $group_input;
           
       $deleted = "live";   
           
       $type = "chat";
          
       $stmt->execute();
           
       return $stmt;    

       }
    


    
       public function get_new_chat($offset_input, $not_owner_input) {

       global $database;
        
       $stmt = $database->connection->prepare("SELECT posts.id as id, posts.message as message, posts.owner as owner, posts.type as type, posts.attach_path as path, posts.attach_name as name, posts.attach_type as file_type, users.username as username, users.img_path as image FROM posts INNER JOIN users ON users.id = posts.owner where posts.id > ? AND posts.owner != ? limit 20");
        
       $stmt->bind_param("ii", $offset, $not_owner);
        
       $offset = $offset_input;
        
       $not_owner = $not_owner_input;
          
       $stmt->execute();
           
       return $stmt;    

       }
    
    

    
    
       public function get_first_few_posts() {

       global $database;
        
       $stmt = $database->connection->prepare("SELECT posts.id as id, posts.message as message, posts.owner as owner, posts.type as type, posts.attach_path as path, posts.attach_name as name, posts.attach_type as file_type, users.username as username, users.img_path as image FROM posts INNER JOIN users ON users.id = posts.owner order by id desc limit 12");
          
       $stmt->execute();
           
       return $stmt;    

       }
    
    
    
    
    
       public function get_very_last_post() {

       global $database;
        
       $stmt = $database->connection->prepare("SELECT posts.id as id, posts.message as message, posts.owner as owner, posts.type as type, posts.attach_path as path, posts.attach_name as name, posts.attach_type as file_type, users.username as username, users.img_path as image FROM posts INNER JOIN users ON users.id = posts.owner order by id desc limit 1");
          
       $stmt->execute();
           
       return $stmt;    

       }

    
    

    
    
    
    
       public function get_next_few_posts($offset_input) {

       global $database;
        
       $stmt = $database->connection->prepare("SELECT posts.id as id, posts.message as message, posts.owner as owner, posts.type as type, posts.attach_path as path, posts.attach_name as name, posts.attach_type as file_type, users.username as username, users.img_path as image FROM posts INNER JOIN users ON users.id = posts.owner where posts.id < ? order by id desc limit 12");
        
       $stmt->bind_param("i", $offset);
        
       $offset = $offset_input;
           
       $stmt->execute();
           
       return $stmt;    

       }
    
    
    
    
    
       public function insert_attach($path_input, $name_input, $type_input, $post_type_input, $group_input, $owner_id_input) {

       global $database;
        
       $stmt = $database->connection->prepare("INSERT INTO posts (attach_path, attach_name, attach_type, type, group_id, deleted, owner) VALUES ( ?, ?, ?, ?, ?, ?, ?)");
        
       $stmt->bind_param("ssssisi", $path, $name, $type, $post_type, $group, $deleted, $owner_id);
        
       $path = $path_input;
           
       $name = $name_input;
           
       $type = $type_input;
           
       $post_type = $post_type_input;
           
       $group = $group_input;
           
       $deleted = "live";
           
       $owner_id = $owner_id_input;
           
       $stmt->execute();
           
       return $stmt;    

       }
    
    
}



$posts = new Posts();









?>