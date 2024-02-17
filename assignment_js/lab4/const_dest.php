<!-- 2. write a php program to demonstrate class with constructor and destructor -->
<?php
class MyClass {
    // Constructor
    public function __construct() {
        echo "Constructor called<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor called<br>";
    }

    // Method
    public function myMethod() {
        echo "Method called<br>";
    }
}

// Create an object of the class
$obj = new MyClass();

// Call a method
$obj->myMethod();
?>
