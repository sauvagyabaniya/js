<!-- 15.Write a program to send email from php page -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $to_email = $_POST['to_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: baniyasauvagya03@example.com"; // Replace your_email@example.com with your actual email address
    
    // Send email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>
<body>
    <h2>Send Email</h2>
    <form method="post">
        <label for="to_email">To:</label><br>
        <input type="email" id="to_email" name="to_email"><br>
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>
