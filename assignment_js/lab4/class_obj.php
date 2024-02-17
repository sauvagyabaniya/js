<!-- 1. write a program to create class and object in php -->
<?php
// Define a class
class Car {
    // Properties
    public $brand;
    public $model;
    public $year;

    // Constructor
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car information
    public function displayInfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Create an object of the class Car
$car1 = new Car("Toyota", "Corolla", 2022);

// Call the method to display car information
$car1->displayInfo();
?>
