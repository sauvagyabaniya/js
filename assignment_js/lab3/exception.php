<!-- 5. Write a program to demonstrate exception handling in php -->
<?php
// Define a function to throw an exception
function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

// Use a try-catch block to handle exceptions
try {
    // Call the function that may throw an exception
    $result = divide(10, 0);
    echo "Result: $result";
} catch (Exception $e) {
    // Catch the exception and handle it
    echo "Exception caught: " . $e->getMessage();
}
?>
