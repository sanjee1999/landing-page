<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Fetch form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "<p>All fields are required. Please fill out the form completely.</p>";
        exit;
    }

    // Sanitize email to prevent header injection
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email address.</p>";
        exit;
    }

    // Prepare the email
    $to = 'sanjeevkanth1999@gmail.com'; // Change this to your email address
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from your contact form:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you, $name! Your message has been sent successfully.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Invalid request. Please submit the form properly.</p>";
}
?>
