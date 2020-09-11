<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendEmail($to,$subject,$message)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->setLanguage('tr', '.vendor/phpmailer/phpmailer/language'); // To load the Turkish version
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'bekir@gmail.com';                     // SMTP username
        $mail->Password   = 'password';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('mailgönderenadres@gmail.com');
        $mail->addAddress($to);     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->CharSet = 'UTF-8'; 
        $mail->AltBody = 'HTML olmadığı için okuyamıyorsunuz!';

        $mail->send();
        echo 'Mail gönderildi.';
    } catch (Exception $e) {
        echo "Mail gönderilemedi. Hata mesajı: {$mail->ErrorInfo}";
    }
}
