<!-- 8. write a program to implement encapsulation in PHP -->
<?php
class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake() { return $this->make; }
    public function getModel() { return $this->model; }
    public function getYear() { return $this->year; }

    public function setMake($make) { $this->make = $make; }
    public function setModel($model) { $this->model = $model; }
    public function setYear($year) { $this->year = $year; }
}

$car = new Car("Toyota", "Corolla", 2022);
$car->setMake("Honda");
$car->setModel("Civic");
$car->setYear(2023);

echo "Make: " . $car->getMake() . "<br>"; // Output: Honda
echo "Model: " . $car->getModel() . "<br>"; // Output: Civic
echo "Year: " . $car->getYear(); // Output: 2023
?>
