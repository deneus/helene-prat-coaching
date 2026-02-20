document.addEventListener('DOMContentLoaded', () => {

  /* ===== i18n Translation System ===== */
  let currentLang = localStorage.getItem('hc-lang') || 'en';
  let translations = {};

  async function loadTranslations(lang) {
    try {
      const res = await fetch(`i18n/${lang}.json`);
      translations = await res.json();
      applyTranslations();
    } catch (e) {
      console.error('Failed to load translations:', e);
    }
  }

  function applyTranslations() {
    // textContent translations
    document.querySelectorAll('[data-i18n]').forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (translations[key] !== undefined) {
        if (el.tagName === 'TITLE') {
          document.title = translations[key];
        } else {
          el.textContent = translations[key];
        }
      }
    });

    // innerHTML translations (for content with <strong> etc.)
    document.querySelectorAll('[data-i18n-html]').forEach(el => {
      const key = el.getAttribute('data-i18n-html');
      if (translations[key] !== undefined) {
        el.innerHTML = translations[key];
      }
    });

    // meta tag translations
    document.querySelectorAll('[data-i18n-meta]').forEach(el => {
      const key = el.getAttribute('data-i18n-meta');
      if (translations[key] !== undefined) {
        el.setAttribute('content', translations[key]);
      }
    });

    // placeholder translations
    document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
      const key = el.getAttribute('data-i18n-placeholder');
      if (translations[key] !== undefined) {
        el.setAttribute('placeholder', translations[key]);
      }
    });

    // Update html lang attribute
    document.documentElement.lang = currentLang;
  }

  /* ===== Language Toggle ===== */
  const langBtn = document.getElementById('lang-toggle');

  function setLang(lang) {
    currentLang = lang;
    localStorage.setItem('hc-lang', lang);
    langBtn.textContent = lang === 'fr' ? 'EN' : 'FR';
    loadTranslations(lang);
  }

  langBtn.addEventListener('click', () => {
    setLang(currentLang === 'fr' ? 'en' : 'fr');
  });

  // Initial load
  setLang(currentLang);

  /* ===== Cookie Consent Banner ===== */
  const cookieBanner = document.getElementById('cookie-banner');
  const cookieAccept = document.getElementById('cookie-accept');
  const cookieReject = document.getElementById('cookie-reject');
  const cookieConsent = localStorage.getItem('hc-cookie-consent');

  function setCookieConsent(accepted) {
    localStorage.setItem('hc-cookie-consent', accepted ? 'accepted' : 'rejected');
    cookieBanner.classList.remove('visible');
    if (accepted && typeof _paq !== 'undefined') {
      _paq.push(['setCookieConsentGiven']);
    }
  }

  if (cookieConsent === 'accepted') {
    if (typeof _paq !== 'undefined') {
      _paq.push(['setCookieConsentGiven']);
    }
  } else if (cookieConsent !== 'rejected') {
    cookieBanner.classList.add('visible');
  }

  cookieAccept.addEventListener('click', () => setCookieConsent(true));
  cookieReject.addEventListener('click', () => setCookieConsent(false));

  /* ===== Sticky Header Shadow ===== */
  const header = document.querySelector('.header');

  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

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

  /* ===== Scroll Reveal Animations ===== */
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.about-photo, .about-content, .split-quote, .program-intro-text, .for-you > .container > h2, .for-you > .container > .section-subtitle, .delivery-formats h3, .footer-brand, .footer-nav, .footer-bottom, .contact h2, .contact > .container > p, .chemistry-card, .contact .msf').forEach(el => {
    revealObserver.observe(el);
  });

  // Session cards cascade — observe the grid, reveal all cards at once (CSS delays handle stagger)
  const sessionsGrid = document.querySelector('.sessions-grid');
  if (sessionsGrid) {
    const gridObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          sessionsGrid.querySelectorAll('.session-card').forEach(card => {
            card.classList.add('revealed');
          });
          gridObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    gridObserver.observe(sessionsGrid);
  }

  // Program details count-up — observe the row, animate numbers + reveal
  const programDetails = document.querySelector('.program-details');
  if (programDetails) {
    const detailsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          programDetails.querySelectorAll('.program-detail').forEach(detail => {
            detail.classList.add('revealed');
          });
          // Count-up animation for numeric values
          programDetails.querySelectorAll('.detail-value').forEach(el => {
            const text = el.textContent.trim();
            const num = parseInt(text);
            if (!isNaN(num) && num > 0) {
              const duration = 1200;
              const start = performance.now();
              el.textContent = '0';
              function tick(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.round(eased * num);
                if (progress < 1) requestAnimationFrame(tick);
              }
              requestAnimationFrame(tick);
            }
            // Globe SVG: add a spin
            const svg = el.querySelector('svg');
            if (svg) {
              svg.style.transition = 'transform 0.8s ease';
              svg.style.transform = 'rotate(360deg)';
            }
          });
          detailsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
    detailsObserver.observe(programDetails);
  }

  // Criteria cards fan-out — observe the grid, reveal all cards together
  const criteriaGrid = document.querySelector('.criteria-grid');
  if (criteriaGrid) {
    const criteriaObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          criteriaGrid.querySelectorAll('.criteria-card').forEach(card => {
            card.classList.add('revealed');
          });
          criteriaObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    criteriaObserver.observe(criteriaGrid);
  }

  // Format items pop-in — observe the grid, reveal all items together
  const formatsGrid = document.querySelector('.formats-grid');
  if (formatsGrid) {
    const formatsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          formatsGrid.querySelectorAll('.format-item').forEach(item => {
            item.classList.add('revealed');
          });
          formatsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    formatsObserver.observe(formatsGrid);
  }

  // Gain items check-first reveal — observe the list, reveal all items together
  const gainsList = document.querySelector('.gains-list');
  if (gainsList) {
    const gainsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          gainsList.querySelectorAll('.gain-item').forEach(item => {
            item.classList.add('revealed');
          });
          gainsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    gainsObserver.observe(gainsList);
  }

  /* ===== Multi-Step Form ===== */
  const form = document.getElementById('contact-form');
  const steps = document.querySelectorAll('.msf-step');
  const prevBtn = document.getElementById('msf-prev');
  const nextBtn = document.getElementById('msf-next');
  const submitBtn = document.getElementById('msf-submit');
  const progressBar = document.getElementById('msf-progress-bar');
  const currentIndicator = document.getElementById('msf-current');
  const successEl = document.getElementById('msf-success');

  const TOTAL_STEPS = 4;
  let currentStep = 1;
  let formInitialized = false;

  function showStep(step) {
    currentStep = step;
    steps.forEach(s => {
      s.classList.remove('active');
      if (parseInt(s.dataset.step) === step) {
        s.classList.add('active');
      }
    });

    // Update progress bar
    progressBar.style.width = ((step / TOTAL_STEPS) * 100) + '%';

    // Update step indicator
    currentIndicator.textContent = step;

    // Show/hide nav buttons
    prevBtn.style.display = step === 1 ? 'none' : '';
    nextBtn.style.display = step < TOTAL_STEPS ? '' : 'none';
    submitBtn.style.display = step === TOTAL_STEPS ? 'inline-block' : 'none';

    // Focus first input of current step (skip on initial page load to avoid scroll jump)
    if (formInitialized) {
      const firstInput = document.querySelector(`.msf-step[data-step="${step}"] input, .msf-step[data-step="${step}"] textarea`);
      if (firstInput) {
        setTimeout(() => firstInput.focus(), 300);
      }
    }
  }

  function validateStep(step) {
    clearErrors();

    if (step === 1) {
      const name = document.getElementById('field-name').value.trim();
      if (!name) {
        showError('error-name', translations['form.required'] || 'This field is required');
        return false;
      }
    }

    if (step === 2) {
      const email = document.getElementById('field-email').value.trim();
      if (!email) {
        showError('error-email', translations['form.required'] || 'This field is required');
        return false;
      }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError('error-email', translations['form.email.invalid'] || 'Please enter a valid email address');
        return false;
      }
    }

    if (step === 3) {
      const country = document.getElementById('field-country').value;
      if (!country) {
        showError('error-country', translations['form.required'] || 'This field is required');
        return false;
      }
    }

    // Step 4: consent checkbox is required
    if (step === 4) {
      const consent = document.getElementById('field-consent');
      if (!consent.checked) {
        showError('error-consent', translations['form.consent.required'] || 'You must accept to continue');
        return false;
      }
    }

    return true;
  }

  function showError(id, msg) {
    const el = document.getElementById(id);
    if (el) {
      el.textContent = msg;
      el.classList.add('visible');
    }
  }

  function clearErrors() {
    document.querySelectorAll('.msf-error').forEach(el => {
      el.textContent = '';
      el.classList.remove('visible');
    });
  }

  // Navigation
  nextBtn.addEventListener('click', () => {
    if (validateStep(currentStep)) {
      showStep(currentStep + 1);
    }
  });

  prevBtn.addEventListener('click', () => {
    if (currentStep > 1) {
      showStep(currentStep - 1);
    }
  });

  // Allow Enter to go next on text/email inputs
  document.querySelectorAll('#contact-form input[type="text"], #contact-form input[type="email"]').forEach(input => {
    input.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') {
        e.preventDefault();
        nextBtn.click();
      }
    });
  });

  // Submit
  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    submitBtn.disabled = true;
    submitBtn.textContent = translations['form.sending'] || 'Sending...';

    const turnstileResponse = document.querySelector('[name="cf-turnstile-response"]')?.value;
    if (!turnstileResponse) {
      submitBtn.disabled = false;
      submitBtn.textContent = translations['form.submit'] || 'Send Message';
      alert(translations['form.captcha'] || 'Please complete the security check.');
      return;
    }

    const formData = {
      name: document.getElementById('field-name').value.trim(),
      email: document.getElementById('field-email').value.trim(),
      country: document.getElementById('field-country').value,
      city: document.getElementById('field-city').value.trim(),
      about: document.getElementById('field-about').value.trim(),
      availability: document.getElementById('field-availability').value.trim(),
      turnstileToken: turnstileResponse
    };

    try {
      // Send via PHP backend
      const response = await fetch('send-email.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData)
      });

      const result = await response.json();
      if (!response.ok || !result.success) {
        throw new Error(result.message || 'Server error');
      }

      // Show success
      form.style.display = 'none';
      document.querySelector('.msf-progress').style.display = 'none';
      document.querySelector('.msf-step-indicator').style.display = 'none';
      successEl.classList.add('visible');

    } catch (err) {
      console.error('Mail error:', err);
      submitBtn.disabled = false;
      submitBtn.textContent = translations['form.submit'] || 'Send Message';
      alert(translations['form.error'] || 'Something went wrong. Please try again or email directly.');
    }
  });

  // Initialize form
  showStep(1);
  formInitialized = true;

});
