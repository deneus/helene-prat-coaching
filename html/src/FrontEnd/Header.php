<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd;

use HeleneCoaching\EnvironmentConfiguration;

final class Header
{
    public static function render(string $title = 'theweknows — Systemic Coaching for Couples, Teams &amp; Partnerships', string $titleI18nKey = 'meta.title', string $description = '', string $descriptionI18nKey = '', array $extraHeadHtml = []): string
    {
        $matomoUrl = rtrim(EnvironmentConfiguration::get('MATOMO_URL'), '/');
        $matomoSiteId = htmlspecialchars(EnvironmentConfiguration::get('MATOMO_SITE_ID'));

        $siteUrl = rtrim(EnvironmentConfiguration::get('SITE_URL', 'https://theweknows.com'), '/');
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = parse_url($requestUri, PHP_URL_PATH) ?: '/';
        $canonicalUrl = $siteUrl . $path;

        $ogTitle = htmlspecialchars(strip_tags(html_entity_decode($title, ENT_QUOTES | ENT_HTML5, 'UTF-8')), ENT_QUOTES, 'UTF-8');
        $ogDescription = htmlspecialchars($description !== '' ? $description : 'Systemic coaching for couples, teams and business partnerships. By theweknows and certified ORSC coach Hélène Prat.', ENT_QUOTES, 'UTF-8');
        $ogImage = $siteUrl . '/images/og-default.jpg';

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

        $cssPath = __DIR__ . '/../../css/style.css';
        $cssVersion = file_exists($cssPath) ? (string) filemtime($cssPath) : '1';

        return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title data-i18n="{$titleI18nKey}">{$title}</title>{$descriptionTag}
  <link rel="canonical" href="{$canonicalUrl}">

  <!-- OpenGraph / social -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="theweknows">
  <meta property="og:url" content="{$canonicalUrl}">
  <meta property="og:title" content="{$ogTitle}">
  <meta property="og:description" content="{$ogDescription}">
  <meta property="og:image" content="{$ogImage}">
  <meta property="og:locale" content="en_US">
  <meta property="og:locale:alternate" content="fr_FR">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{$ogTitle}">
  <meta name="twitter:description" content="{$ogDescription}">
  <meta name="twitter:image" content="{$ogImage}">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "theweknows",
    "alternateName": "theweknows — Systemic Coaching",
    "url": "{$siteUrl}",
    "image": "{$ogImage}",
    "description": "Systemic coaching for couples, teams and business partnerships. By certified ORSC coach Hélène Prat.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Hilversum",
      "addressCountry": "NL"
    },
    "areaServed": ["NL", "FR", "EU", "Online worldwide"],
    "founder": {
      "@type": "Person",
      "name": "Hélène Prat",
      "jobTitle": "Certified ORSC Coach & PCM Trainer",
      "worksFor": {
        "@type": "Organization",
        "name": "theweknows"
      },
      "hasCredential": [
        "Certified ORSC (Organization and Relationship Systems Coaching)",
        "Certified PCM (Process Communication Model) Trainer",
        "MA Organizational and Social Psychology"
      ]
    },
    "knowsAbout": [
      "Systemic coaching",
      "ORSC",
      "Process Communication Model",
      "Couples coaching",
      "Team coaching",
      "Business partnership coaching",
      "Relocation transitions",
      "Psychological safety"
    ]
  }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css?v={$cssVersion}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">
{$extraHead}
{$matomo}
</head>
<body>

  <!-- ===== HEADER ===== -->
  <header class="header">
    <div class="container">
      <a href="/" class="logo">theweknows</a>
      <nav class="nav-links" id="nav-links">
        <a href="/couples" data-i18n="nav.couples">Couples</a>
        <a href="/teams" data-i18n="nav.teams">Teams</a>
        <a href="/partnerships" data-i18n="nav.partnerships">Partnerships</a>
        <a href="/about" data-i18n="nav.about">About</a>
        <a href="/testimonials" data-i18n="nav.testimonials">Testimonials</a>
        <a href="/contact" class="nav-cta" data-i18n="nav.contact">Book a call</a>
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
