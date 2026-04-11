<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd;

final class Footer
{
    public static function render(): string
    {
        $jsPath = __DIR__ . '/../../js/main.js';
        $jsVersion = file_exists($jsPath) ? (string) filemtime($jsPath) : '1';

        return <<<HTML
  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-brand">
          <span class="logo">theweknows</span>
          <p data-i18n="footer.tagline">Systemic Coaching for Couples, Teams &amp; Partnerships</p>
          <p data-i18n="footer.byline">A coaching practice by Hélène Prat</p>
          <p>Hilversum, Netherlands</p>
        </div>
        <nav class="footer-nav">
          <a href="/couples" data-i18n="nav.couples">Couples</a>
          <a href="/teams" data-i18n="nav.teams">Teams</a>
          <a href="/partnerships" data-i18n="nav.partnerships">Partnerships</a>
          <a href="/about" data-i18n="nav.about">About</a>
          <a href="/testimonials" data-i18n="nav.testimonials">Testimonials</a>
          <a href="/contact" data-i18n="nav.contact">Contact</a>
        </nav>
        <nav class="footer-nav">
          <a href="/resources/coaching-vs-therapy" data-i18n="nav.coachingVsTherapy">Coaching vs Therapy</a>
          <a href="/resources/what-is-systemic-coaching" data-i18n="nav.whatIsSystemicCoaching">What is Systemic Coaching?</a>
          <a href="/resources/orsc-method" data-i18n="nav.orscMethod">ORSC Method</a>
          <a href="/resources/pcm-method" data-i18n="nav.pcmMethod">PCM Method</a>
          <a href="/resources/faq" data-i18n="nav.faq">FAQ</a>
        </nav>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 theweknows. <span data-i18n="footer.rights">All rights reserved.</span> · <a href="/privacy.php" data-i18n="footer.privacy">Privacy Policy</a></p>
      </div>
    </div>
  </footer>

  <!-- ===== COOKIE CONSENT BANNER ===== -->
  <div class="cookie-banner" id="cookie-banner" role="dialog" aria-label="Cookie consent">
    <div class="cookie-banner-content">
      <p data-i18n-html="cookie.text">This website uses cookies for anonymous analytics. See our <a href="/privacy.php">Privacy Policy</a> for details.</p>
      <div class="cookie-banner-actions">
        <button class="btn btn-outline cookie-btn" id="cookie-reject" data-i18n="cookie.reject">Reject</button>
        <button class="btn btn-primary cookie-btn" id="cookie-accept" data-i18n="cookie.accept">Accept</button>
      </div>
    </div>
  </div>

  <script src="/js/main.js?v={$jsVersion}"></script>
</body>
</html>
HTML;
    }
}
