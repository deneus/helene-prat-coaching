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

        $name         = $formData['name'];
        $email        = $formData['email'];
        $country      = $formData['country'];
        $city         = $formData['city'];
        $about        = $formData['about'];
        $availability = $formData['availability'];

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
            <td style='padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;'>Pays</td>
            <td style='padding: 8px; border-bottom: 1px solid #eee;'>{$country}</td>
        </tr>
        <tr>
            <td style='padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;'>Ville</td>
            <td style='padding: 8px; border-bottom: 1px solid #eee;'>{$city}</td>
        </tr>
        <tr>
            <td style='padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;'>À propos</td>
            <td style='padding: 8px; border-bottom: 1px solid #eee;'>" . nl2br($about ?: '<em>Non renseigné</em>') . "</td>
        </tr>
        <tr>
            <td style='padding: 8px; font-weight: bold;'>Disponibilités</td>
            <td style='padding: 8px;'>" . nl2br($availability ?: '<em>Non renseigné</em>') . "</td>
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
        $mail->Subject = "Contact site web — {$name}";
        $mail->Body = $htmlBody;
        $mail->AltBody = "Nom: {$name}\nEmail: {$email}\nPays: {$country}\nVille: {$city}\nÀ propos: {$about}\nDisponibilités: {$availability}";

        $mail->send();
    }
}
