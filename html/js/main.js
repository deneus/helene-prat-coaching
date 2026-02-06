document.addEventListener('DOMContentLoaded', () => {

  /* ===== Language Toggle ===== */
  const langBtn = document.getElementById('lang-toggle');
  const savedLang = localStorage.getItem('hc-lang');

  if (savedLang === 'fr') {
    document.body.classList.add('fr');
    langBtn.textContent = 'EN';
  }

  langBtn.addEventListener('click', () => {
    document.body.classList.toggle('fr');
    const isFr = document.body.classList.contains('fr');
    langBtn.textContent = isFr ? 'EN' : 'FR';
    localStorage.setItem('hc-lang', isFr ? 'fr' : 'en');
  });

  /* ===== Sticky Header Shadow ===== */
  const header = document.querySelector('.header');

  /* ===== Mobile Menu ===== */
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('nav-links');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
  });

  // Smooth scroll & close mobile menu on link click
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      const target = document.querySelector(targetId);
      if (!target) return;

      e.preventDefault();
      hamburger.classList.remove('active');
      navLinks.classList.remove('active');

      const headerH = header.offsetHeight;
      const targetY = target.getBoundingClientRect().top + window.scrollY - headerH;
      const startY = window.scrollY;
      const diff = targetY - startY;
      const duration = Math.min(1200, Math.max(600, Math.abs(diff) * 0.6));
      let start = null;

      function easeInOutCubic(t) {
        return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
      }

      function step(timestamp) {
        if (!start) start = timestamp;
        const elapsed = timestamp - start;
        const progress = Math.min(elapsed / duration, 1);
        window.scrollTo(0, startY + diff * easeInOutCubic(progress));
        if (progress < 1) requestAnimationFrame(step);
      }

      requestAnimationFrame(step);
    });
  });

  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });


});
