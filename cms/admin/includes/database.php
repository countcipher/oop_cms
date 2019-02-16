<?php

require_once("config.php");

class Database{
    
    public $connection;
    
    function __construct(){
        
        $this->open_db_connection();
        
    }//End of __construct
    
    public function open_db_connection(){
        
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
        if(mysqli_connect_errno()){
            
            die("Database connection failure ".mysqli_error());
            
        }
        
    }// end of open_db_connection
    
    public function query($sql){
        
        $result = mysqli_query($this->connection, $sql);
        
        return $result;
        
    }//end of query
    
    private function confirm_query($result){
        
        if(!$result){
            die("Query failed");
        }
        
    }//end of confirm_query
    
    public function escape_string($string){
        
        $escaped_string = mysqli_real_escape_string($this->connection, $string);
        
        return $escaped_string;
        
    }
      
    
}// end of Database class

$database = new Database();


?>