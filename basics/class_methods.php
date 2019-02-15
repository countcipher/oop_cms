<?php

$message = "Hello, world!";

class Cars{
    
    function greeting($message){
        
        echo $message."<br>";
        
    }
    
}

$cars = new Cars;

$cars->greeting($message);

$the_methods = get_class_methods("Cars");

foreach($the_methods as $method){
    
    echo $method."<br>";
    
}

?>