<?php

declare(strict_types=1);

namespace HeleneCoaching\Mailer;

use HeleneCoaching\EnvironmentConfiguration;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

final class Contact
{
    public static function send(array $formData): void
    {
        $gmailAddress = EnvironmentConfiguration::get('GMAIL_ADDRESS');
        $gmailAppPassword = EnvironmentConfiguration::get('GMAIL_APP_PASSWORD');
        $recipientName = EnvironmentConfiguration::get('RECIPIENT_NAME', 'Hélène Prat');

        $name = $formData['name'];
        $email = $formData['email'];
        $service = $formData['service'];
        $message = $formData['message'];

        $htmlBody = "
<html>
<body style='font-family: Arial, sans-serif; color: #333;'>
    <h2 style='color: #E8927C;'>Nouveau message depuis le site</h2>
    <table style='border-collapse: collapse; width: 100%;'>
        <tr>
            <td style='padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;'>Nom</td>
            <td style='padding: 8px; border-bottom: 1px solid #eee;'>{$name}</td>
        </tr>
        <tr>
            <td style='padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;'>Email</td>
            <td style='padding: 8px; border-bottom: 1px solid #eee;'><a href='mailto:{$email}'>{$email}</a></td>
        </tr>
        <tr>
            <td style='padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;'>Service</td>
            <td style='padding: 8px; border-bottom: 1px solid #eee;'>{$service}</td>
        </tr>
        <tr>
            <td style='padding: 8px; font-weight: bold;'>Message</td>
            <td style='padding: 8px;'>" . nl2br($message ?: '<em>Aucun message</em>') . "</td>
        </tr>
    </table>
</body>
</html>";

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $gmailAddress;
        $mail->Password = $gmailAppPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom($gmailAddress, 'Site Hélène Coaching');
        $mail->addAddress($gmailAddress, $recipientName);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "Contact site web — {$name} ({$service})";
        $mail->Body = $htmlBody;
        $mail->AltBody = "Nom: {$name}\nEmail: {$email}\nService: {$service}\nMessage: {$message}";

        $mail->send();
    }
}
