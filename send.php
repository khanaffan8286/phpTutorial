<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Debug output for troubleshooting
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';   // Gmail's SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'khanaffan828618@gmail.com';           // Your Gmail address
    $mail->Password   = 'jxeldxjlgicwpnoj';                    // Your App Password (no spaces)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Optional: Bypass SSL verification for localhost (XAMPP)
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    // Recipients
    $mail->setFrom('khanaffan828618@gmail.com', 'Your Company Name'); // Ensure this is valid
    $mail->addAddress('khanaffan82861@gmail.com', 'Recipient');       // Ensure this is valid

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Registration Confirmation'; // Avoid generic terms like "Registration form"
    $mail->Body    = '<p>This is a confirmation email for your registration.</p>';

    // Send email
    $mail->send();
    echo 'Message has been sent ✅';
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
