<?php

$message = "Hello, world!";

$myArray = [1,2,3];

$secondArray = array(5, 6, 7);

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

echo $myArray[1]."<br>";

echo $secondArray[1]."<br>";

foreach($myArray as $number){
    
    echo $number."<br>";
    
}

?>


<?php foreach($secondArray as $number) : ?>

<p>The number is <?php echo $number; ?></p>

<?php endforeach; ?>