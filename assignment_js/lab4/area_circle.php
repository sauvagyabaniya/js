<!-- 3. write an object oriented program in php to find area of circle -->
<?php
class Circle {
    // Property
    private $radius;

    // Constructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Method to calculate area
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Create an object of the Circle class
$circle = new Circle(5);

// Call the method to calculate area
$area = $circle->calculateArea();

// Output the result
echo "Area of the circle with radius 5 is: " . $area;
?>
