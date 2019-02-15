<?php

class Cars{
    
    static $wheels = 4;
    static $door_count = 4;
 
    
static function car_detail(){
    
    echo Cars::$wheels;
    echo Cars::$door_count;
}
    
}

echo Cars::$door_count;
echo "<br>";
Cars::car_detail();



?>