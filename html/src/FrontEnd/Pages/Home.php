<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class Home
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'theweknows — Systemic Coaching for Couples, Teams &amp; Partnerships',
            titleI18nKey: 'home.meta.title',
            description: 'theweknows — systemic coaching for couples, teams and business partnerships. Founded by Hélène Prat, Certified ORSC Coach and PCM Trainer. Hilversum, Netherlands — online worldwide.',
            descriptionI18nKey: 'home.meta.description',
        );

        $footer = Footer::render();

        $body = <<<HTML
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="home.hero.title">When transitions hit, systems reveal themselves.</h1>
      <p class="subtitle" data-i18n="home.hero.subtitle">Systemic coaching for couples, teams and business partnerships ready to grow — not just cope.</p>
      <a href="/contact" class="btn btn-primary" data-i18n="home.hero.cta">Book a free call with Hélène</a>
      <p class="hero-hook" data-i18n="home.hero.hook">Coaching isn't therapy — and it isn't advice. It's a space where you and the people who matter to you get to see your shared system clearly, choose what you want it to become, and walk out with the tools to make it real. Whether you're a couple, a team, or business partners, this is where growth happens on purpose.</p>
    </div>
  </section>

  <!-- ===== 3 AUDIENCE CARDS ===== -->
  <section class="for-you" id="audiences">
    <div class="container">
      <h2 class="text-center" data-i18n="home.audiences.title">Who we work with</h2>
      <p class="section-subtitle" data-i18n="home.audiences.subtitle">Three kinds of systems. One rigorous approach to growth.</p>

      <div class="criteria-grid">
        <a href="/couples" class="criteria-card" style="text-decoration:none; color:inherit; display:block;">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3 data-i18n="home.audiences.couples.title">Couples</h3>
          <p data-i18n="home.audiences.couples.desc">You love each other, but life has shifted — a move, a baby, a wedding, or just the slow drift of busy years. Rebuild the "us" that made sense in the first place.</p>
          <span class="card-link" data-i18n="home.audiences.couples.link">Coaching for couples →</span>
        </a>

        <a href="/teams" class="criteria-card" style="text-decoration:none; color:inherit; display:block;">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 data-i18n="home.audiences.teams.title">Teams</h3>
          <p data-i18n="home.audiences.teams.desc">High-performing teams are built, not hoped for. Psychological safety, real trust, and the resilience to adapt when things change around you — together.</p>
          <span class="card-link" data-i18n="home.audiences.teams.link">Coaching for teams →</span>
        </a>

        <a href="/partnerships" class="criteria-card" style="text-decoration:none; color:inherit; display:block;">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <h3 data-i18n="home.audiences.partnerships.title">Business Partnerships</h3>
          <p data-i18n="home.audiences.partnerships.desc">You started this together. Don't let silent drift, growth pains, or unaligned visions cost you what you built. Systemic coaching for co-founders and business partners.</p>
          <span class="card-link" data-i18n="home.audiences.partnerships.link">Coaching for partnerships →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== MEET HÉLÈNE TEASER ===== -->
  <section class="about" id="about-teaser">
    <div class="container">
      <div class="about-grid">
        <div class="about-photo">
          <img src="images/portrait-placeholder.svg" alt="Hélène Prat">
        </div>
        <div class="about-content">
          <h2 data-i18n="home.about.title">Meet Hélène</h2>
          <p data-i18n="home.about.p1">Certified ORSC® Systems Coach, PCM Trainer, and former international HR leader with 20 years of experience. Hélène works at the intersection of organizational psychology, systems thinking, and lived experience — she has moved countries four times with her family, so she knows what it's like when transitions reshape the ground beneath you.</p>
          <p data-i18n="home.about.p2">Her approach is rigorous without being clinical. Warm without being vague. She helps you see the patterns you're living inside — and gives you the tools to change the ones that no longer serve you.</p>
          <a href="/about" class="btn btn-outline" data-i18n="home.about.cta">Read Hélène's full story →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== DEMYSTIFY: COACHING ≠ THERAPY ===== -->
  <section class="gains" id="coaching-not-therapy">
    <div class="container">
      <h2 data-i18n="home.demystify.title">Coaching, not therapy</h2>
      <div class="gains-list" style="max-width:760px;">
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="home.demystify.p1"><strong>Therapy</strong> often looks backward to heal wounds. <strong>Coaching</strong> looks forward, to build what's next — with the resources you already have.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="home.demystify.p2">Coaching is an investment in growth — personal, relational, or professional — not a response to dysfunction. You don't need to be "broken" to benefit.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="home.demystify.p3">Systemic coaching works with the whole system — your couple, your team, your partnership — not individuals in isolation. The change sticks because everyone is part of it.</span>
        </div>
      </div>
      <div style="text-align:center; margin-top:2rem;">
        <a href="/resources/coaching-vs-therapy" class="btn btn-outline" style="color:var(--color-white); border-color:var(--color-white);" data-i18n="home.demystify.link">Read the full answer →</a>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact" id="contact-cta">
    <div class="container">
      <h2 data-i18n="home.cta.title">Curious if this could work for you?</h2>
      <p data-i18n="home.cta.subtitle">A free 30-minute call is the simplest way to find out. No pressure, no commitment — just a real conversation to see what's possible.</p>
      <a href="/contact" class="btn btn-primary" data-i18n="home.cta.button">Book your free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
