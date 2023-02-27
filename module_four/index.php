<?php

class Car {
    private $make;
    private $model;
    private $year;

    function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Car Make: " . $this->make ."\n" . "Car Model: " . $this->model ."\n" . "Car Year: " . $this->year ."\n"; 
    }
}

$car = new Car("Toyota", "Corolla", 2015);
$car->display_info();

echo PHP_EOL;

$carTwo = new Car("Honda", "Civic", 2015);
$carTwo->display_info();

