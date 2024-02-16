<!-- write a php program to demonstrate how to access static members of a class. -->
<?php
class MathUtil {
    // Static property
    public static $pi = 3.14159;

    // Static method
    public static function square($num) {
        return $num * $num;
    }
}

// Accessing static property
echo "Value of pi: " . MathUtil::$pi . "<br>";

// Accessing static method
echo "Square of 5: " . MathUtil::square(5) . "<br>";
?>
