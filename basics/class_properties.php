<?php

class Cars{
    
    var $wheel_count = 4;
    var $door_count = 4;
    
    function car_detail(){
        
        return "This car has ".$this->wheel_count." wheels";//referencing a variable within the class with the 'this' keyword
        
    }
}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count = 10;//notice variable has no $
echo "<br>";
echo $mercedes->wheel_count;
echo "<br>";
echo $mercedes->car_detail();

?>