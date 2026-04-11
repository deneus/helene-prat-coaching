<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class ComingSoon
{
    public static function render(string $pageTitle, string $i18nKeyPrefix = 'comingsoon'): string
    {
        $header = Header::render(
            title: $pageTitle . ' — theweknows',
            titleI18nKey: $i18nKeyPrefix . '.meta.title',
        );

        $footer = Footer::render();

        $safeTitle = htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8');

        $body = <<<HTML
  <section class="hero">
    <div class="container" style="text-align:center;">
      <h1>{$safeTitle}</h1>
      <p class="subtitle" data-i18n="comingsoon.subtitle">This page is being crafted with care. In the meantime, explore the rest of the site.</p>
      <a href="/" class="btn btn-primary" data-i18n="comingsoon.cta">Back to home</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
