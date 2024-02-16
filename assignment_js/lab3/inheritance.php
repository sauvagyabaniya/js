<!-- 7. write a php program to demonstrate inheritance -->
<?php
// Parent class
class Animal {
    // Property
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method
    public function eat() {
        echo "$this->name is eating<br>";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    // Method specific to Dog
    public function bark() {
        echo "$this->name is barking<br>";
    }
}

// Child class inheriting from Animal
class Cat extends Animal {
    // Method specific to Cat
    public function meow() {
        echo "$this->name is meowing<br>";
    }
}

// Create objects of the classes
$dog = new Dog("Rainbow");
$cat = new Cat("Leo");

// Call methods
$dog->eat();  // Inherited from Animal
$dog->bark(); // Specific to Dog

$cat->eat();  // Inherited from Animal
$cat->meow(); // Specific to Cat
?>
