<?php

class Cars{
    
    public $wheel_count = 4;
    static $door_count = 2;
    
    function __construct(){//constructor gets called automatically when class is instantiated
        
        echo $this->wheel_count;
        echo self::$door_count++;
        
    }
    
    function __destruct(){
        
        echo self::$door_count--;
        
    }
    
}

$cars0 = new Cars();
$cars1 = new Cars();

?>