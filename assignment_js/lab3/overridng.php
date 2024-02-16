<!-- 4. write an object oriented program in php to demonstrate method overriding -->
<?php
// Parent class
class Animal {
    // Method
    public function makeSound() {
        return "Animal makes a sound";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    // Method overriding
    public function makeSound() {
        return "Dog barks";
    }
}

// Child class inheriting from Animal
class Cat extends Animal {
    // Method overriding
    public function makeSound() {
        return "Cat meows";
    }
}

// Create objects of the classes
$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

// Call the makeSound method on each object
echo $animal->makeSound() . "<br>"; // Output: Animal makes a sound
echo $dog->makeSound() . "<br>";    // Output: Dog barks
echo $cat->makeSound();             // Output: Cat meows
?>
