<!-- 6. write a php program to demostrate use of this, parent keywords -->
<?php
class ParentClass {
    // Property
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method
    public function display() {
        echo "Parent class name: " . $this->name . "<br>";
    }
}

// Child class inheriting from ParentClass
class ChildClass extends ParentClass {
    // Method overriding
    public function display() {
        // Call parent method using parent keyword
        parent::display();

        // Access parent property using parent keyword
        echo "Child class name: " . parent::$name . "<br>";

        // Access child property using this keyword
        echo "Child class name: " . $this->name . "<br>";
    }
}
$child = new ChildClass("Child");

$child->display();
?>
