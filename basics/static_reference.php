<?php

class Cars{
    
    static $wheels = 6;
 
    
static function car_detail(){
    
    return self::$wheels;//Notice usage of 'self' keyword
}
    
}

class Trucks extends Cars{
    
    static function display(){
        
        echo parent::car_detail();//Notice usage of 'parent' keyword
        
    }
    
}


Trucks::display();//a static usage of function does not require an instance of the object


?>