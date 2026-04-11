<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class About
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Meet Hélène — The Coach Behind theweknows',
            titleI18nKey: 'about.meta.title',
            description: 'Hélène Prat is the coach behind theweknows. Certified ORSC systems coach, PCM trainer, and former international HR leader. 20 years helping couples, teams and partnerships grow through transitions.',
            descriptionI18nKey: 'about.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="aboutPage.hero.title">Meet Hélène</h1>
      <p class="subtitle" data-i18n="aboutPage.hero.subtitle">"Transitions reveal the systems we live in — and give us the chance to reshape them."</p>
    </div>
  </section>

  <!-- ===== BIO ===== -->
  <section class="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-photo">
          <img src="images/portrait-placeholder.svg" alt="Hélène Prat">
        </div>
        <div class="about-content">
          <h2 data-i18n="about.title">Meet Hélène</h2>
          <p data-i18n="about.p1">Hélène Prat is an international HR leader with nearly 20 years of experience partnering with business teams. She studied Organizational &amp; Social Psychology, where her fascination with group dynamics and the undercurrents that shape behavior first began.</p>
          <p data-i18n="about.p2">Over a decade ago, while developing a leadership program, she discovered Process Communication (PCM), a powerful methodology that helps individuals build awareness of their personality, motivators, and distress patterns. As a certified trainer and practitioner, she has helped individuals, couples and teams strengthen their communication effectiveness.</p>
          <p data-i18n="about.p3">In 2023, Hélène encountered systemic coaching through the ORSC® methodology — a moment when everything fell into place. She realized she could no longer overlook the transformative power of systems, whether teams, partnerships, or couples.</p>
          <p data-i18n="about.p4">Originally from France, Hélène moved to Dublin in 2008, returned to France in 2009, relocated to Sydney with her life partner in 2015, and in 2022 moved back to Europe with their son. Her family has now settled in Hilversum, in the Netherlands.</p>
          <p data-i18n="about.p5">Her approach blends systemic coaching, effective communication tools, and energy healing practices, supporting her clients in feeling grounded and integrating new insights at their own pace. She is generous, full of life, and brings humor and positivity to everything she does.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== METHODS ===== -->
  <section class="program">
    <div class="container">
      <div class="program-intro">
        <h2 data-i18n="aboutPage.methods.title">How Hélène works</h2>
        <p class="program-intro-text" data-i18n="aboutPage.methods.intro">Rigorous frameworks, warm delivery. Hélène draws on three complementary approaches, chosen and sequenced based on what each system — each couple, team or partnership — actually needs.</p>
      </div>
      <div class="sessions-grid">
        <div class="session-card">
          <h3 data-i18n="aboutPage.methods.orsc.title">ORSC® — Organization &amp; Relationship Systems Coaching</h3>
          <p data-i18n="aboutPage.methods.orsc.desc">A systemic approach to coaching relationships — romantic, professional, or entrepreneurial — as living systems. Hélène is certified in this methodology, which treats the "us" as a third entity worth listening to.</p>
          <p><a href="/resources/orsc-method" data-i18n="aboutPage.methods.orsc.link">Learn more about ORSC →</a></p>
        </div>
        <div class="session-card">
          <h3 data-i18n="aboutPage.methods.pcm.title">PCM — Process Communication Model</h3>
          <p data-i18n="aboutPage.methods.pcm.desc">A framework for understanding personality, motivation, and what happens when we're under stress. As a certified PCM trainer, Hélène helps people and teams communicate effectively across differences.</p>
          <p><a href="/resources/pcm-method" data-i18n="aboutPage.methods.pcm.link">Learn more about PCM →</a></p>
        </div>
        <div class="session-card">
          <h3 data-i18n="aboutPage.methods.integrative.title">An integrative, embodied practice</h3>
          <p data-i18n="aboutPage.methods.integrative.desc">Systemic coaching, communication tools, and energy-aware practices — blended so the insights don't just land in your head but in how you actually live and work.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PHILOSOPHY: COACHING ≠ THERAPY ===== -->
  <section class="gains">
    <div class="container">
      <h2 data-i18n="aboutPage.philosophy.title">What coaching is — and isn't</h2>
      <div class="gains-list">
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="aboutPage.philosophy.p1">Coaching is an investment in growth, not a response to dysfunction. You don't need to be "broken" to benefit.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="aboutPage.philosophy.p2">Therapy often looks backward to heal wounds. Coaching looks forward to build what's next — with the resources you already have.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="aboutPage.philosophy.p3">Hélène is a certified coach — not a therapist. If therapy is what you need, she'll tell you honestly and point you in the right direction.</span>
        </div>
      </div>
      <div style="text-align:center; margin-top:2rem;">
        <a href="/resources/coaching-vs-therapy" class="btn btn-outline" style="color:var(--color-white); border-color:var(--color-white);" data-i18n="aboutPage.philosophy.link">Read the full answer →</a>
      </div>
    </div>
  </section>

  <!-- ===== CREDENTIALS ===== -->
  <section class="for-you">
    <div class="container">
      <h2 class="text-center" data-i18n="aboutPage.credentials.title">Credentials &amp; experience</h2>
      <p class="section-subtitle" data-i18n="aboutPage.credentials.subtitle">Twenty years of practice, three deep methodologies.</p>
      <div class="criteria-grid">
        <div class="criteria-card">
          <h3 data-i18n="aboutPage.credentials.c1.title">Certified ORSC® Coach</h3>
          <p data-i18n="aboutPage.credentials.c1.desc">Trained in Organization &amp; Relationship Systems Coaching by CRR Global.</p>
        </div>
        <div class="criteria-card">
          <h3 data-i18n="aboutPage.credentials.c2.title">PCM Certified Trainer</h3>
          <p data-i18n="aboutPage.credentials.c2.desc">Certified trainer and practitioner of the Process Communication Model (Kahler Communications).</p>
        </div>
        <div class="criteria-card">
          <h3 data-i18n="aboutPage.credentials.c3.title">MA — Organizational &amp; Social Psychology</h3>
          <p data-i18n="aboutPage.credentials.c3.desc">Academic grounding in the study of groups, systems, and how behavior is shaped by context.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="aboutPage.cta.title">Ready to talk?</h2>
      <p data-i18n="aboutPage.cta.subtitle">A free 30-minute call is the best way to see if working with Hélène is a fit for you and your system.</p>
      <a href="/contact?source=about" class="btn btn-primary" data-i18n="aboutPage.cta.button">Book your free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
