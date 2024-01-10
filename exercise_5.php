<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage 
{
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(){
        echo "This beverage is $this->temperature and $this->color.";
    }

    public function displayPrice(){
        echo "Price: €" . number_format($this->price, 2);
    }
}

$cola = new Beverage("black", 3.5);
echo "<h1>exercise one:</h1>";
echo "<br>";
$cola->getInfo();
echo "<br>";
$cola->displayPrice();
echo "<br>"
echo "Temperature: $cola->temperature";
echo "<br>";
