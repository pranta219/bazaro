<?php
// Include PHPMailer classes manually
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function loadEnv($path) {
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // skip comments
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        // Remove quotes if present
        $value = trim($value, "\"'");

        // Set in $_ENV and environment
        $_ENV[$name] = $value;
        putenv("$name=$value");
    }
}

// Load .env
loadEnv(__DIR__ . '/.env');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = isset($_POST["name"])     ? trim($_POST["name"])     : "";
    $company  = isset($_POST["company"])  ? trim($_POST["company"])  : "";
    $phone    = isset($_POST["phone"])    ? trim($_POST["phone"])    : "";
    $budget  = isset($_POST["budget"])  ? trim($_POST["budget"])  : "";
    $message  = isset($_POST["message"])  ? trim($_POST["message"])  : "";
    $checkbox = isset($_POST["checkbox"]) ? trim($_POST["checkbox"]) : "";
    // Sanitize email separately as it's not a ternary based on isset
    $email    = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : "";

    // Validation
    if ( empty($name) OR empty($company) OR empty($budget) OR empty($message) OR empty($phone) OR empty($checkbox) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Set a 400 (bad request) response code and exit.

        http_response_code(400);

        echo "Please complete the form and try again.";

        exit;

    }


    // Recipient
    $recipient = "mdsalim400@gmail.com";

    // HTML email content
    $email_content = "
    <html>
    <head>
        <title>New Contact Form</title>
    </head>
    <body style='font-family: Arial, sans-serif;'>
        <h2 style='color:#333;'>New Contact Request</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Budget:</strong> {$budget}</p>
        <p><strong>Message:</strong><br>".nl2br($message)."</p>
        <hr>
        <p style='font-size:12px;color:#999;'>This email was sent from Aqlova Aleric HTML template.</p>
    </body>
    </html>
    ";

    // PHPMailer setup
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['USERNAME']; // Hostinger email
        $mail->Password   = $_ENV['PASSWORD'];   // Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
  

        //Recipients
        $mail->setFrom('admin@aqlova.com', 'Pixora HTML Form Contact');
        $mail->addAddress($recipient); // Admin inbox
        $mail->addReplyTo($email, $name); // User reply



        // Content
        $mail->isHTML(true);
        $mail->Subject = "New contact from $name - $budget";
        $mail->Body    = $email_content;
        $mail->AltBody = strip_tags($email_content);

        $mail->send();

        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
