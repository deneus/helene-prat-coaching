<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd;

use HeleneCoaching\FrontEnd\Pages\Home;
use HeleneCoaching\FrontEnd\Pages\CouplesHub;
use HeleneCoaching\FrontEnd\Pages\CouplesRelocation;
use HeleneCoaching\FrontEnd\Pages\Teams;
use HeleneCoaching\FrontEnd\Pages\Partnerships;
use HeleneCoaching\FrontEnd\Pages\About;
use HeleneCoaching\FrontEnd\Pages\Testimonials;
use HeleneCoaching\FrontEnd\Pages\Contact;
use HeleneCoaching\FrontEnd\Pages\NotFound;
use HeleneCoaching\FrontEnd\Pages\Resources\CoachingVsTherapy;
use HeleneCoaching\FrontEnd\Pages\Resources\WhatIsSystemicCoaching;
use HeleneCoaching\FrontEnd\Pages\Resources\OrscMethod;
use HeleneCoaching\FrontEnd\Pages\Resources\PcmMethod;
use HeleneCoaching\FrontEnd\Pages\Resources\Faq;
use HeleneCoaching\FrontEnd\Pages\Assessments\CouplesAssessment;

final class Router
{
    private const ROUTES = [
        '/'                                     => Home::class,
        '/couples'                              => CouplesHub::class,
        '/couples/relocation'                   => CouplesRelocation::class,
        '/couples/assessment'                   => CouplesAssessment::class,
        '/teams'                                => Teams::class,
        '/partnerships'                         => Partnerships::class,
        '/about'                                => About::class,
        '/testimonials'                         => Testimonials::class,
        '/contact'                              => Contact::class,
        '/resources/coaching-vs-therapy'        => CoachingVsTherapy::class,
        '/resources/what-is-systemic-coaching'  => WhatIsSystemicCoaching::class,
        '/resources/orsc-method'                => OrscMethod::class,
        '/resources/pcm-method'                 => PcmMethod::class,
        '/resources/faq'                        => Faq::class,
    ];

    public static function dispatch(string $uri): string
    {
        $normalized = self::normalize($uri);
        $pageClass = self::ROUTES[$normalized] ?? null;

        if ($pageClass === null || !class_exists($pageClass) || !method_exists($pageClass, 'render')) {
            http_response_code(404);
            return NotFound::render();
        }

        return $pageClass::render();
    }

    private static function normalize(string $uri): string
    {
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';
        $path = '/' . ltrim($path, '/');
        if ($path !== '/') {
            $path = rtrim($path, '/');
        }
        return $path;
    }
}
