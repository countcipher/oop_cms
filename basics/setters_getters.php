<?php

class Cars{
    
    private $door_count = 4;
    
function get_values(){
    
    echo $this->door_count;
    
}
    function set_values(){
        
       $this->door_count = 10;
        
    }
    
}

$cars = new Cars();

$cars->set_values();

$cars->get_values();

?>