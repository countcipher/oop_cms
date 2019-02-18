<?php

class User{
    
    
    static function find_all_users(){
        global $database;
        
        $result_set = $database->query("SELECT * FROM users");
        
        return $result_set;
        
    }
    
    static function find_user_by_id($user_id){
        global $database;
        
        $result_set = $database->query("SELECT * FROM users WHERE id = $user_id");
        $found_user = mysqli_fetch_assoc($result_set);
        return $found_user;
        
    }
    
}


?>