<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class NotFound
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Page not found — theweknows',
            titleI18nKey: 'notfound.meta.title',
        );

        $footer = Footer::render();

        $body = <<<HTML
  <section class="hero">
    <div class="container" style="text-align:center;">
      <h1 data-i18n="notfound.title">Page not found</h1>
      <p class="subtitle" data-i18n="notfound.subtitle">The page you are looking for doesn't exist (anymore).</p>
      <a href="/" class="btn btn-primary" data-i18n="notfound.cta">Back to home</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
