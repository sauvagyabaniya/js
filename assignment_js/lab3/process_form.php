<!-- 12.Create a form to collect student details such as name, address, phone,age, gender and store into the database.  -->
<?php
// Database connection
$servername = "localhost";
$username = "username"; // Enter your MySQL username
$password = "password"; // Enter your MySQL password
$dbname = "student_db"; // Enter your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// Prepare and execute SQL query to insert data into database
$sql = "INSERT INTO students (name, address, phone, age, gender)
        VALUES ('$name', '$address', '$phone', '$age', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Student details added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
