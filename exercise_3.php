<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/


require_once "Beverage.php";

class Beer extends Beverage {
    public $name;
    public $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(){
        return $this->alcoholPercentage;
    }

    private function beerInfo(){
       return "Hi, I'm $this->name and have an alcohol percentage of $this->getAlcoholPercentage and I have a $this->color color.";
    }

    public function printBeerInfo(){
        echo $this->beerInfo();
    }
}

$duvel = new Beer("light", 3.5, "Duvel", 8.5);
echo "<h1>exercise three:</h1>";
echo "<br>";
echo "The alcohol percentage from Duvel is" . " " . $duvel->getAlcoholPercentage() . "%";
echo "<br>";
echo "Alcohol percentage $duvel->alcoholPercentage %";
echo "<br>";
$duvel->getInfo();
echo "<br>";
