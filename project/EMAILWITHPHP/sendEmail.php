<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

require_once("./PHPMailer/PHPMailer.php");
require_once("./PHPMailer/SMTP.php");

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'nicenick740@gmail.com'; // YOUR gmail email
    $mail->Password = 'hjhkicpgzrsmyymt'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('nicenick740@gmail.com', 'Renish Surani');
    $mail->addAddress('renishsurani9900@gmail.com', 'Receiver Name');
    $mail->addReplyTo('nicenick740@gmail.com', 'Renish Surani'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "IWT Subject Marks";
    $mail->Body = 'OTP : <b>152631</b>';
    $mail->AltBody = 'Your are sucessfully Failed';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}

?>