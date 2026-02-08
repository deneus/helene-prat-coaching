<?php
declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

echo Header::render(
    title: 'Privacy Policy — Hélène Prat',
    titleI18nKey: 'privacy.meta.title',
);
?>

  <!-- ===== PRIVACY POLICY ===== -->
  <section class="privacy-policy">
    <div class="container">
      <h1 data-i18n="privacy.title">Privacy Policy</h1>
      <p class="privacy-updated" data-i18n="privacy.updated">Last updated: February 2026</p>

      <h2 data-i18n="privacy.controller.title">Data Controller</h2>
      <p data-i18n="privacy.controller.text">Hélène Prat, independent coaching practitioner based in Hilversum, Netherlands.</p>

      <h2 data-i18n="privacy.collected.title">Data We Collect</h2>
      <p data-i18n="privacy.collected.intro">When you use the contact form on this website, we collect the following information:</p>
      <ul>
        <li data-i18n="privacy.collected.name">Your name</li>
        <li data-i18n="privacy.collected.email">Your email address</li>
        <li data-i18n="privacy.collected.service">The type of service you are interested in</li>
        <li data-i18n="privacy.collected.message">Your message (optional)</li>
      </ul>

      <h2 data-i18n="privacy.purpose.title">Why We Collect Your Data</h2>
      <p data-i18n="privacy.purpose.text">Your data is collected solely to respond to your contact request and to follow up on your inquiry about coaching services. We do not use your data for marketing purposes unless you explicitly request it.</p>

      <h2 data-i18n="privacy.legal.title">Legal Basis</h2>
      <p data-i18n="privacy.legal.text">The processing of your data is based on your consent, given when you check the consent box on the contact form (Article 6(1)(a) GDPR).</p>

      <h2 data-i18n="privacy.retention.title">Data Retention</h2>
      <p data-i18n="privacy.retention.text">Your personal data is retained for a maximum of 1 year from the date of your request. After this period, your data is permanently deleted.</p>

      <h2 data-i18n="privacy.sharing.title">Data Sharing</h2>
      <p data-i18n="privacy.sharing.text">Your data is not shared with any third parties. Emails are sent via Gmail (Google SMTP) solely for the purpose of delivering your message to Hélène Prat.</p>

      <h2 data-i18n="privacy.analytics.title">Analytics</h2>
      <p data-i18n="privacy.analytics.text">This website uses Matomo, a self-hosted analytics solution, to collect anonymous usage statistics. No personal data is shared with third parties through analytics. You can opt out of analytics tracking at any time.</p>

      <h2 data-i18n="privacy.captcha.title">Security (Captcha)</h2>
      <p data-i18n="privacy.captcha.text">This website uses Cloudflare Turnstile to protect the contact form against spam. Turnstile may collect technical data (IP address, browser information) as described in Cloudflare's privacy policy.</p>

      <h2 data-i18n="privacy.rights.title">Your Rights</h2>
      <p data-i18n="privacy.rights.intro">Under the GDPR, you have the right to:</p>
      <ul>
        <li data-i18n="privacy.rights.access">Access your personal data</li>
        <li data-i18n="privacy.rights.rectify">Rectify inaccurate data</li>
        <li data-i18n="privacy.rights.erase">Request erasure of your data</li>
        <li data-i18n="privacy.rights.restrict">Restrict processing of your data</li>
        <li data-i18n="privacy.rights.portability">Data portability</li>
        <li data-i18n="privacy.rights.withdraw">Withdraw your consent at any time</li>
      </ul>

      <h2 data-i18n="privacy.contact.title">Contact</h2>
      <p data-i18n="privacy.contact.text">For any questions regarding your personal data or to exercise your rights, please contact Hélène Prat via the contact form on this website or by email.</p>
    </div>
  </section>

<?= Footer::render() ?>
