<?php

declare(strict_types=1);

/* EXERCISE 1

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage 
{
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(){
        echo "This beverage is $this->temperature and $this->color.";
    }
    
}

$cola = new Beverage("black", 2.00);
echo "<h1>exercise one:</h1>";
echo "</br>";
$cola->getInfo();
echo "</br>";
echo "Temperature: $cola->temperature";
echo "</br>";
