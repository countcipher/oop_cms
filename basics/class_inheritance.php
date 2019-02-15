<?php

class Cars{
    
    var $wheels = 4;
    
  function greeting(){
      
      return "Hello";
      
  }
    
}

class Trucks extends Cars{
    
    
    
}

$cars = new Cars();
$trucks = new Trucks();

echo $trucks->wheels;

?>