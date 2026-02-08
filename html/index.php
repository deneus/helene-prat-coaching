<?php
declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

use HeleneCoaching\EnvironmentConfiguration;
use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

$turnstileSiteKey = htmlspecialchars(EnvironmentConfiguration::get('TURNSTILE_SITE_KEY'));

echo Header::render(
    title: 'Hélène Prat — Coaching for Couples &amp; Teams in Transition',
    titleI18nKey: 'meta.title',
    description: 'Certified ORSC Coach and PCM Trainer helping couples and teams thrive through relocation and transition. Based in Hilversum, Netherlands.',
    descriptionI18nKey: 'meta.description',
    extraHeadHtml: ['  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>'],
);
?>

  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="hero.title">Helping couples and teams thrive through transition</h1>
      <p class="subtitle" data-i18n="hero.subtitle">Certified ORSC Coach &amp; PCM Trainer · Hilversum, Netherlands</p>
      <a href="#contact" class="btn btn-primary" data-i18n="hero.cta">Book a Free Call</a>
    </div>
  </section>

  <!-- ===== ABOUT ===== -->
  <section class="about" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-photo">
          <img src="images/portrait-placeholder.svg" alt="Hélène Prat">
        </div>
        <div class="about-content">
          <h2 data-i18n="about.title">Meet Hélène</h2>
          <p data-i18n="about.p1">Hélène Prat is an HR leader with nearly 20 years of experience partnering with business teams. She studied Organizational &amp; Social Psychology, where her fascination with group dynamics and the undercurrents that shape behavior first began.</p>
          <p data-i18n="about.p2">Over a decade ago, while developing a leadership program, she discovered Process Communication (PCM), a powerful methodology that helps individuals build awareness of their personality, motivators, and distress patterns. As a certified trainer and practitioner, she has helped individuals, couples and teams strengthen their communication effectiveness.</p>
          <p data-i18n="about.p3">In 2023, Hélène encountered systemic coaching through the ORSC® methodology — a moment when everything fell into place. She realized she could no longer overlook the transformative power of systems, whether teams, partnerships, or couples.</p>
          <p data-i18n="about.p4">Originally from France, Hélène moved to Dublin in 2008, returned to France in 2009, relocated to Sydney with her life partner in 2015, and in 2022 moved back to Europe with their son. Her family has now settled in Hilversum, in the Netherlands.</p>
          <p data-i18n="about.p5">Her approach blends systemic coaching, effective communication tools, and energy healing practices, supporting her clients in feeling grounded and integrating new insights at their own pace. She is generous, full of life, and brings humor and positivity to everything she does.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PROGRAM: ROOTED TOGETHER ===== -->
  <section class="program" id="program">
    <div class="container">
      <div class="program-intro">
        <h2 class="split-quote">
          <span class="split-left" data-i18n="program.quote.left">"Is this move bringing you closer</span>
          <span class="split-dash">—</span>
          <span class="split-right" data-i18n="program.quote.right">or quietly pulling you apart?"</span>
        </h2>
        <p class="program-intro-text" data-i18n-html="program.intro">Relocating to a new country is exciting — and also disorienting. You juggle visas, housing, schools, and a new culture, while underneath the surface your relationship is also going through a major transition. <strong>Rooted Together</strong> is a coaching program designed to help you navigate this transition as a team — so you don't just move country, you build a new life that feels like home for both of you.</p>
      </div>

      <!-- Sessions -->
      <div class="sessions-grid">
        <div class="session-card">
          <span class="session-number">1</span>
          <h3 data-i18n="session1.title">The System Called "Us" in Transition</h3>
          <p data-i18n="session1.desc">Introduction to systemic coaching and the "third entity." Mapping the current relationship landscape: hopes, fears, and dynamics since the move.</p>
        </div>
        <div class="session-card">
          <span class="session-number">2</span>
          <h3 data-i18n="session2.title">Honoring What Was Left Behind</h3>
          <p data-i18n="session2.desc">Exploring grief and loss — what each partner has said goodbye to. Rituals of acknowledgment — consciously closing chapters and carrying forward what still serves.</p>
        </div>
        <div class="session-card">
          <span class="session-number">3</span>
          <h3 data-i18n="session3.title">Managing Change Together</h3>
          <p data-i18n="session3.desc">Understanding different adaptation paces. Building empathy for the partner adapting differently — new role vs. reinvention.</p>
        </div>
        <div class="session-card">
          <span class="session-number">4</span>
          <h3 data-i18n="session4.title">Reimagining Dreams and Roles</h3>
          <p data-i18n="session4.desc">Exploring individual and shared dreams in this new context. Revisiting roles and identity — what's shifting and what's missing.</p>
        </div>
        <div class="session-card">
          <span class="session-number">5</span>
          <h3 data-i18n="session5.title">Rooting in the Netherlands</h3>
          <p data-i18n="session5.desc">Exploring belonging and local integration — "What does home feel like now?" Identifying values and activities that create roots and connection.</p>
        </div>
        <div class="session-card">
          <span class="session-number">6</span>
          <h3 data-i18n="session6.title">Celebrating Growth and Looking Ahead</h3>
          <p data-i18n="session6.desc">Reflecting on the journey, learning, and transformation. Identifying rituals of continuation and celebrating resilience as a relationship system.</p>
        </div>
      </div>

      <!-- Practical details -->
      <div class="program-details">
        <div class="program-detail">
          <span class="detail-value">3</span>
          <span class="detail-label" data-i18n="details.months">months</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">6</span>
          <span class="detail-label" data-i18n="details.sessions">sessions</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">90</span>
          <span class="detail-label" data-i18n="details.duration">min each</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </span>
          <span class="detail-label" data-i18n="details.format">online or in-person</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== IS THIS FOR YOU ===== -->
  <section class="for-you" id="approach">
    <div class="container">
      <h2 class="text-center" data-i18n="foryou.title">Is This For You?</h2>
      <p class="section-subtitle" data-i18n="foryou.subtitle">This program is a fit if…</p>

      <div class="criteria-grid">
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z"/></svg>
          </div>
          <h3 data-i18n="criteria1.title">Recently Relocated</h3>
          <p data-i18n="criteria1.desc">You have recently relocated to the Netherlands or are preparing to move.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <h3 data-i18n="criteria2.title">Staying Connected</h3>
          <p data-i18n="criteria2.desc">You want to stay connected and intentional as a couple in the midst of change.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          </div>
          <h3 data-i18n="criteria3.title">Ready to Talk</h3>
          <p data-i18n="criteria3.desc">You feel "there is a lot to talk about," but don't quite know where to start.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHAT YOU'LL GAIN ===== -->
  <section class="gains">
    <div class="container">
      <h2 class="fade-in" data-i18n="gains.title">What You'll Gain</h2>
      <div class="gains-list">
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="gain1">A clearer understanding of how relocation is impacting your relationship dynamic.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="gain2">Practical tools to navigate emotional and everyday challenges with more ease and empathy.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="gain3">Clarity on how to honor what you've left behind while creating meaningful roots in the Netherlands.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="gain4">A shared vision for this new chapter and concrete ways to support each other's dreams.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="gain5">Renewed connection and intimacy through guided conversations you might not have on your own.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CONTACT / MULTI-STEP FORM ===== -->
  <section class="contact" id="contact">
    <div class="container">
      <h2 data-i18n="contact.title">Curious if Rooted Together is right for you?</h2>
      <p data-i18n="contact.subtitle">Book a free 30-minute chemistry call to explore your situation and see how we can work together.</p>

      <!-- Multi-step form -->
      <div class="msf" id="multi-step-form">
        <!-- Progress bar -->
        <div class="msf-progress">
          <div class="msf-progress-bar" id="msf-progress-bar"></div>
        </div>
        <div class="msf-step-indicator">
          <span data-i18n="form.step">Step</span> <span id="msf-current">1</span> <span data-i18n="form.of">of</span> <span id="msf-total">4</span>
        </div>

        <form id="contact-form" novalidate>
          <!-- Step 1: Name -->
          <div class="msf-step active" data-step="1">
            <label for="field-name" data-i18n="form.name.label">What is your name?</label>
            <input type="text" id="field-name" name="name" required data-i18n-placeholder="form.name.placeholder" placeholder="Your full name">
            <span class="msf-error" id="error-name"></span>
          </div>

          <!-- Step 2: Email -->
          <div class="msf-step" data-step="2">
            <label for="field-email" data-i18n="form.email.label">What is your email address?</label>
            <input type="email" id="field-email" name="email" required data-i18n-placeholder="form.email.placeholder" placeholder="your@email.com">
            <span class="msf-error" id="error-email"></span>
          </div>

          <!-- Step 3: Service type -->
          <div class="msf-step" data-step="3">
            <label data-i18n="form.service.label">What type of service interests you?</label>
            <div class="msf-radio-group">
              <label class="msf-radio">
                <input type="radio" name="service" value="private" required>
                <span class="msf-radio-label" data-i18n="form.service.private">Private Coaching</span>
              </label>
              <label class="msf-radio">
                <input type="radio" name="service" value="group">
                <span class="msf-radio-label" data-i18n="form.service.group">Small Group</span>
              </label>
              <label class="msf-radio">
                <input type="radio" name="service" value="workshop">
                <span class="msf-radio-label" data-i18n="form.service.workshop">Workshop</span>
              </label>
            </div>
            <span class="msf-error" id="error-service"></span>
          </div>

          <!-- Step 4: Message -->
          <div class="msf-step" data-step="4">
            <label for="field-message" data-i18n="form.message.label">Anything else you'd like to share?</label>
            <textarea id="field-message" name="message" rows="4" data-i18n-placeholder="form.message.placeholder" placeholder="Your message (optional)"></textarea>
            <label class="msf-checkbox">
              <input type="checkbox" id="field-consent" name="consent" required>
              <span data-i18n="form.consent">I agree that my data will be used to process my request.</span>
            </label>
            <span class="msf-error" id="error-consent"></span>
            <div class="cf-turnstile" data-sitekey="<?= $turnstileSiteKey ?>" data-theme="light" data-size="normal"></div>
          </div>

          <!-- Navigation buttons -->
          <div class="msf-nav">
            <button type="button" class="btn btn-outline msf-prev" id="msf-prev" data-i18n="form.prev">Previous</button>
            <button type="button" class="btn btn-primary msf-next" id="msf-next" data-i18n="form.next">Next</button>
            <button type="submit" class="btn btn-primary msf-submit" id="msf-submit" data-i18n="form.submit">Send Message</button>
          </div>
        </form>

        <!-- Success message -->
        <div class="msf-success" id="msf-success">
          <div class="msf-success-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <h3 data-i18n="form.success.title">Message sent!</h3>
          <p data-i18n="form.success.text">Thank you for reaching out. Hélène will get back to you shortly.</p>
        </div>
      </div>

    </div>
  </section>

<?= Footer::render() ?>
