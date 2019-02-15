<?php

class Cars{
    
    public $wheels = 4;//'Public' takes place of 'var'
    private $door_count = 4;
    protected $seat_count = 2;
    
function car_detail(){
    
    echo $this->wheels;
    echo $this->door_count;
    echo $this->seat_count;
    
}
    
}

$cars = new Cars();

$cars->car_detail();
echo "<br>";
echo $cars->door_count;
echo $cars->seat_count;

?>