<?php

declare(strict_types=1);

namespace HeleneCoaching\Captcha;

final class TurnstileVerifier
{
    private const VERIFY_URL = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    public static function verify(string $token, string $secret): bool
    {
        if (empty($secret) || empty($token)) {
            return empty($secret);
        }

        $response = file_get_contents(self::VERIFY_URL, false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query([
                    'secret' => $secret,
                    'response' => $token,
                ]),
            ],
        ]));

        $result = json_decode($response, true);
        return !empty($result['success']);
    }
}
