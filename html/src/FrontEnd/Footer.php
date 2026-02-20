<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd;

final class Footer
{
    public static function render(): string
    {
        return <<<HTML
  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-brand">
          <span class="logo">Hélène Prat</span>
          <p data-i18n="footer.tagline">Coaching for Couples &amp; Teams in Transition</p>
          <p>Hilversum, Netherlands</p>
        </div>
        <nav class="footer-nav">
          <a href="/#about" data-i18n="nav.about">About</a>
          <a href="/#program">Rooted Together</a>
          <a href="/#approach" data-i18n="nav.approach">Approach</a>
          <a href="/#contact">Contact</a>
        </nav>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 Hélène Prat. <span data-i18n="footer.rights">All rights reserved.</span> · <a href="/privacy.php" data-i18n="footer.privacy">Privacy Policy</a></p>
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

  <script src="js/main.js?v=4"></script>
</body>
</html>
HTML;
    }
}
