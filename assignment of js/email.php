<!-- 15.Write a program to send email from php page -->
<?php
// Set the recipient email address
$to = "rainbow19@gmail.com";

// Set the subject of the email
$subject = "Test Email";

// Set the message body
$message = "This is a test email sent from PHP.";

// Set additional headers
$headers = "From: sauvagya@gmail.com\r\n";
$headers .= "Reply-To: leoxfy22@gmail.com\r\n";
$headers .= "Content-Type: text/html\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
