<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

// Load .env once
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

/**
 * Sends an email using PHPMailer and SMTP Gmail.
 *
 * @param string $toEmail Recipient email address
 * @param string $toName Recipient name
 * @param string $subject Email subject
 * @param string $bodyHtml HTML content of the email
 * @param string|null $bodyAlt Plain text content (optional)
 * @return bool True on success, false on failure
 */

function sendEmail(string $toEmail, string $toName, string $subject, string $bodyHtml, ?string $bodyAlt = null): bool {
    $mail = new PHPMailer(true);
    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'] ?? 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'] ?? '';
        $mail->Password   = $_ENV['SMTP_PASSWORD'] ?? '';
        $mail->SMTPSecure = $_ENV['SMTP_ENCRYPTION'] ?? 'tls';
        $mail->Port       = $_ENV['SMTP_PORT'] ?? 587;

        // Sender info
        $mail->setFrom($mail->Username, $_ENV['EMAIL_FROM_NAME'] ?? 'Souvenir City');
        $mail->addAddress($toEmail, $toName);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $bodyHtml;
        if ($bodyAlt) {
            $mail->AltBody = $bodyAlt;
        }

        $mail->send();
        return true;

    } catch (Exception $e) {
        error_log("Email could not be sent. PHPMailer Error: {$mail->ErrorInfo}");
        return false;
    }
}