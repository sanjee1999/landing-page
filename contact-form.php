<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '8177e7001@smtp-brevo.com'; // Brevo login
        $mail->Password = 'v54K9w8YJBR7mpgx'; // Brevo SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom($email, $name); // User's email and name as sender
        $mail->addAddress('sanjeevkanth1999@gmail.com', 'sanjeev'); // Replace with your recipient email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "Contact Form Submission from $name";
        $mail->Body = "
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email
        $mail->send();
        echo "Thank you for your message! We will get back to you shortly.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>
