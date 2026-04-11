<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class Teams
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Team Coaching — Psychological Safety, Trust &amp; Resilience | theweknows',
            titleI18nKey: 'teams.meta.title',
            description: 'Systemic team coaching for leadership teams serious about psychological safety, high-trust performance, and adapting to change. By theweknows — certified ORSC coach Hélène Prat. Online and on-site.',
            descriptionI18nKey: 'teams.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="teams.hero.title">The difference between a team that talks about trust — and one that lives it</h1>
      <p class="subtitle" data-i18n="teams.hero.subtitle">Systemic coaching for leadership teams who want real psychological safety, not the poster on the wall.</p>
      <a href="/contact?source=teams" class="btn btn-primary" data-i18n="teams.hero.cta">Book a free consultation</a>
      <p class="hero-hook" data-i18n="teams.hero.hook">Your team is competent. Your people are smart. You've run the off-sites, you've read the books, you've put "psychological safety" in the values deck. And yet — the best ideas still die quietly in the pre-meeting chat. People still soften the truth in the room and say the real thing at lunch. Something is gripping the system that nobody can quite name. That's the system's work. That's what coaching is for.</p>
    </div>
  </section>

  <!-- ===== THE NEED (PAS) ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:820px; margin:0 auto;">
        <h2 style="text-align:center;" data-i18n="teams.need.title">Three reasons leadership teams engage us</h2>
        <p style="text-align:center; color:var(--color-text-light); margin-bottom:2.5rem;" data-i18n="teams.need.subtitle">The pattern is almost never about competence. It's about what the system allows people to say.</p>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px; margin-bottom:1.5rem;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="teams.need.n1.title">1. Psychological safety — for real this time</h3>
          <p data-i18n="teams.need.n1.desc">Google's Project Aristotle named it the single biggest predictor of team effectiveness. And yet most teams treat it as a vibe to aspire to, not a system to build. <strong>Coaching builds it into the fabric of how your team meets, decides, and disagrees.</strong></p>
        </div>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px; margin-bottom:1.5rem;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="teams.need.n2.title">2. High-performing, high-trust — not one or the other</h3>
          <p data-i18n="teams.need.n2.desc">You've been told you need to choose between "nice" and "high-performing." That's a false choice. The best teams we work with are warm <em>and</em> sharp. They challenge each other harder because the trust is real. <strong>Coaching helps you become one of them.</strong></p>
        </div>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="teams.need.n3.title">3. The ground keeps moving — and you need to adapt together</h3>
          <p data-i18n="teams.need.n3.desc">Reorgs. Strategy pivots. Layoffs. New execs. Growth spurts. Each change lands on the team before anyone has time to process it. <strong>Systemic coaching builds the resilience to absorb change without losing the people in the process.</strong></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHY SYSTEMIC COACHING (vs training) ===== -->
  <section class="for-you">
    <div class="container">
      <h2 class="text-center" data-i18n="teams.why.title">Why systemic coaching (and not just another workshop)</h2>
      <p class="section-subtitle" data-i18n="teams.why.subtitle">Training teaches frameworks. Coaching changes the system that uses them.</p>
      <div class="criteria-grid">
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3 data-i18n="teams.why.c1.title">We work with the team, not the individuals</h3>
          <p data-i18n="teams.why.c1.desc">Systemic coaching treats your team as a single living system — with its own patterns, voices, and blind spots. That's where the sustainable change lives.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15 8 22 9 17 14 18 21 12 17 6 21 7 14 2 9 9 8 12 2"/></svg>
          </div>
          <h3 data-i18n="teams.why.c2.title">We name the unspoken — safely</h3>
          <p data-i18n="teams.why.c2.desc">The things nobody says in the room are usually the most important. Coaching surfaces them in a structured way that builds trust rather than blowing it up.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
          </div>
          <h3 data-i18n="teams.why.c3.title">We measure shifts in how you work, not test scores</h3>
          <p data-i18n="teams.why.c3.desc">The outcome isn't what you know. It's how your team meets, disagrees, decides, and moves together when things get hard.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== THE OFFER ===== -->
  <section class="program">
    <div class="container">
      <div class="program-intro">
        <h2 data-i18n="teams.offer.title">The engagement</h2>
        <p class="program-intro-text" data-i18n="teams.offer.intro">Every team engagement is tailored. Below is the standard shape — the exact rhythm, depth and focus areas are designed with you during the free consultation.</p>
      </div>
      <div class="program-details">
        <div class="program-detail">
          <span class="detail-value">4–6</span>
          <span class="detail-label" data-i18n="teams.offer.d1">sessions</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">2h</span>
          <span class="detail-label" data-i18n="teams.offer.d2">per session</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">3</span>
          <span class="detail-label" data-i18n="teams.offer.d3">months rhythm</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </span>
          <span class="detail-label" data-i18n="teams.offer.d4">on-site or online</span>
        </div>
      </div>
      <p style="text-align:center; margin-top:2rem; color:var(--color-text-light);" data-i18n="teams.offer.pricing">Pricing is discussed during the free consultation, based on team size, location and scope.</p>
    </div>
  </section>

  <!-- ===== COACHING ≠ THERAPY MINI ===== -->
  <section class="about" style="padding-top:60px; padding-bottom:60px;">
    <div class="container">
      <div style="max-width:720px; margin:0 auto; text-align:center; background:var(--color-accent-light); padding:2rem 2.5rem; border-radius:16px;">
        <h3 style="margin-bottom:0.8rem;" data-i18n="teams.notTherapy.title">A note: this isn't group therapy</h3>
        <p style="margin-bottom:1rem;" data-i18n="teams.notTherapy.desc">Team coaching is a performance investment, not a remediation. It's for teams that want to grow on purpose, not a fix for teams that are failing. Hélène is a certified coach, not a therapist — and your team will feel the difference.</p>
        <a href="/resources/coaching-vs-therapy" data-i18n="teams.notTherapy.link">Read more →</a>
      </div>
    </div>
  </section>

  <!-- ===== WHY HÉLÈNE ===== -->
  <section class="gains">
    <div class="container">
      <h2 data-i18n="teams.whyHelene.title">Why work with Hélène</h2>
      <div class="gains-list">
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="teams.whyHelene.w1">20 years as an international HR leader — she has built, broken and rebuilt leadership teams inside real companies, not just from the outside.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="teams.whyHelene.w2">Certified in ORSC® — the gold-standard methodology for coaching teams and organizations as living systems.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="teams.whyHelene.w3">Certified PCM trainer — meaning she can help your team understand each other's communication styles and stress signatures in a way that actually sticks.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="teams.whyHelene.w4">Multilingual (EN / FR) — comfortable with international and distributed leadership teams.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="teams.cta.title">Let's explore what your team needs</h2>
      <p data-i18n="teams.cta.subtitle">A free 30-minute consultation is the simplest way to start. We'll scope what your team is really working on — and whether coaching is the right fit.</p>
      <a href="/contact?source=teams" class="btn btn-primary" data-i18n="teams.cta.button">Book a free consultation</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
