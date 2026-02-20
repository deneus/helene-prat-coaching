<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use HeleneCoaching\EnvironmentConfiguration;
use HeleneCoaching\Captcha\TurnstileVerifier;
use HeleneCoaching\Mailer\Contact;

// CORS and headers
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$input = json_decode(file_get_contents('php://input'), true);

// Verify Turnstile captcha
$turnstileToken = $input['turnstileToken'] ?? '';
$turnstileSecret = EnvironmentConfiguration::get('TURNSTILE_SECRET');

if (!TurnstileVerifier::verify($turnstileToken, $turnstileSecret)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Captcha verification failed']);
    exit;
}

// Validate input
$name         = htmlspecialchars(trim($input['name'] ?? ''));
$email        = filter_var(trim($input['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$country      = htmlspecialchars(trim($input['country'] ?? ''));
$city         = htmlspecialchars(trim($input['city'] ?? ''));
$about        = htmlspecialchars(trim($input['about'] ?? ''));
$availability = htmlspecialchars(trim($input['availability'] ?? ''));

if (empty($name) || !$email) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Send email
try {
    Contact::send([
        'name'         => $name,
        'email'        => $email,
        'country'      => $country,
        'city'         => $city,
        'about'        => $about,
        'availability' => $availability,
    ]);

    echo json_encode(['success' => true, 'message' => 'Email sent successfully']);
} catch (\Exception $e) {
    error_log('Mail error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send email']);
}
