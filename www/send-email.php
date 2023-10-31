<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Include PHPMailer library

if($_SERVER["REQUEST_METHOD"] === "POST"){
    try {
        $mail = new PHPMailer(true);
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'mailhog'; // Your SMTP server hostname
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@novahotel.nl';
        $mail->Password = 'password';
        $mail->Port = 1025;

        //Recipients
        $mail->setFrom('no_reply@novahotel.nl');
        $mail->addAddress($_POST['email']);

        //Content
        $mail->isHTML(false);
        $mail->Subject = "bevestig mail";
        $mail->Body = "klik hier om te bevestigen";

        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
}