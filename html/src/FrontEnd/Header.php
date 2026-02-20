<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd;

use HeleneCoaching\EnvironmentConfiguration;

final class Header
{
    public static function render(string $title = 'Hélène Prat — Coaching for Couples &amp; Teams in Transition', string $titleI18nKey = 'meta.title', string $description = '', string $descriptionI18nKey = '', array $extraHeadHtml = []): string
    {
        $matomoUrl = rtrim(EnvironmentConfiguration::get('MATOMO_URL'), '/');
        $matomoSiteId = htmlspecialchars(EnvironmentConfiguration::get('MATOMO_SITE_ID'));

        $matomo = '';
        if (!empty($matomoUrl) && !empty($matomoSiteId) && $matomoUrl !== 'https://your-matomo-instance.com') {
            $matomo = <<<HTML
  <!-- Matomo -->
  <script>
    var _paq = window._paq = window._paq || [];
    _paq.push(['requireCookieConsent']);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="{$matomoUrl}/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '{$matomoSiteId}']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <noscript><p><img referrerpolicy="no-referrer-when-downgrade" src="{$matomoUrl}/matomo.php?idsite={$matomoSiteId}&amp;rec=1" style="border:0;" alt="" /></p></noscript>
  <!-- End Matomo -->
HTML;
        }

        $descriptionTag = '';
        if (!empty($description)) {
            $descriptionTag = "\n  <meta name=\"description\" data-i18n-meta=\"{$descriptionI18nKey}\" content=\"{$description}\">";
        }

        $extraHead = implode("\n", $extraHeadHtml);

        return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title data-i18n="{$titleI18nKey}">{$title}</title>{$descriptionTag}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">
{$extraHead}
{$matomo}
</head>
<body>

  <!-- ===== HEADER ===== -->
  <header class="header">
    <div class="container">
      <a href="/" class="logo">Hélène Prat</a>
      <nav class="nav-links" id="nav-links">
        <a href="/#about" data-i18n="nav.about">About</a>
        <a href="/#program">Rooted Together</a>
        <a href="/#approach" data-i18n="nav.approach">Approach</a>
        <a href="/#contact">Contact</a>
        <button class="lang-toggle" id="lang-toggle"><span class="fi fi-fr"></span> FR</button>
      </nav>
      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>
HTML;
    }
}
