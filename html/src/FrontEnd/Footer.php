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

  <script src="js/main.js?v=3"></script>
</body>
</html>
HTML;
    }
}
