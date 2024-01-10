<?php

declare(strict_types=1);

require_once "Beverage.php";

class Beer extends Beverage {
    protected $name;
    protected $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(){
        return $this->alcoholPercentage;
    }

    public function getInfo(): void{

    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<h1>exercise 4:</h1>";
echo "<br>";
echo "The alcohol percentage from Duvel is" . " " . $duvel->getAlcoholPercentage() . "%";
echo "<br>";
echo "Alcohol percentage $duvel->alcoholPercentage %";
echo "<br>";
$duvel->getInfo();

