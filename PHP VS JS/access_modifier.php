<?php

class car
{
    public $name;
    // protected $color;

    // function __construct($n, $c)
    // {
    //     $this->name = $n;
    //     $this->color = $c;
    // }

    public function drive()
    {
        echo "$this->name Car Can Be Driven............";
    }
}

class sedan extends car
{
    public $name;
    // protected $color;

    public function drive()
    {
        echo " $this->name Car Can Be Driven............";
    }
}

$car1 = new car;
$car1->name = "Toyota Yaris";
// $car1->color = "Metalic Red";

$car2 = new sedan;
$car2->name = "Corolla";


$car2->drive();
