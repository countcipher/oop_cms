<?php

require_once("config.php");

class Database{
    
    public $connection;
    
    function __construct(){
        
        $this->open_db_connection();
        
    }//End of __construct
    
    public function open_db_connection(){
        
        //$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
        
        //below is an updated OOP version
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
        if($this->connection->connect_errno){
            
            die("Database connection failure ".$this->connection->connect_error);
            
        }
        
    }// end of open_db_connection
    
    public function query($sql){
        
        //updated version for OOP
        $result = $this->connection->query($sql);
        
        $this->confirm_query($result);
        
        return $result;
        
    }//end of query
    
    private function confirm_query($result){
        
        if(!$result){
            die("Query failed".$this->connection->connect_error);
        }
        
    }//end of confirm_query
    
    public function escape_string($string){
        
        //$escaped_string = mysqli_real_escape_string($this->connection, $string);
        
        //updated version for OOP
        $escaped_string = $this->connection->real_escape_string($string);
        
        return $escaped_string;
        
    }
    
    public function the_insert_id(){
        
        return $this->connection->insert_id;
        
    }
      
    
}// end of Database class

$database = new Database();


?>