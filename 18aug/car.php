<?php
// to have a car in my Application
// Should be able to print the details of each cars


// Class and objects
// Create Class


class car{
    // property
    public $name;
    public $color;

    // Behaviour /action
    function sayHello(){
        echo "Hello";
    }
}
// creating object $firstCar -----------
    $firstCar = new Car();
    $secondCar = new Car();
    $thirdCar = new Car();
    
    $firstCar -> name = "Ferrari";
    $firstCar -> color = "White";
    
    $secondCar -> name = "BMW";
    $secondCar -> color = "Black";
    
    $secondCar -> name = "Tata";
    $secondCar -> color = "Red";

    echo $secondCar -> name. PHP_EOL;
    $firstCar -> sayHello();

// Comment
?>

