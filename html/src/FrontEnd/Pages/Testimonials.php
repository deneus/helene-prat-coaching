<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class Testimonials
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Testimonials — theweknows',
            titleI18nKey: 'testimonials.meta.title',
            description: 'What couples, teams and business partners say about their coaching journey with theweknows and Hélène Prat.',
            descriptionI18nKey: 'testimonials.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="testimonials.hero.title">In their own words</h1>
      <p class="subtitle" data-i18n="testimonials.hero.subtitle">A first wave of testimonials from the systems Hélène is currently working with. Full quotes and named clients will follow as clients graduate and give their consent to be featured.</p>
    </div>
  </section>

  <!-- ===== PLACEHOLDERS NOTICE ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:760px; margin:0 auto; text-align:center;">
        <p style="background:var(--color-accent-light); padding:1rem 1.5rem; border-radius:12px; display:inline-block;" data-i18n="testimonials.notice">✨ A first wave of real testimonials is being collected — these three are early drafts, clearly marked as placeholders. Want to be featured? <a href="/contact?source=testimonials">Reach out.</a></p>
      </div>
    </div>
  </section>

  <!-- ===== TESTIMONIAL CARDS ===== -->
  <section class="program">
    <div class="container">
      <div class="sessions-grid">

        <!-- Placeholder 1: Couple relocation -->
        <div class="session-card" style="border-left:4px solid var(--color-primary);">
          <span class="session-number" style="width:auto; padding:0 12px; border-radius:20px; font-size:0.7rem; letter-spacing:0.05em;" data-i18n="testimonials.tag.couple">COUPLE · RELOCATION</span>
          <p style="font-style:italic; font-size:1.05rem; line-height:1.7; margin:1rem 0;" data-i18n="testimonials.t1.quote">"After our move from France to the Netherlands, we felt like we were living in two different worlds. In six sessions with Hélène, we rebuilt our compass together — not by going back to who we were, but by choosing who we wanted to become here."</p>
          <p style="font-weight:600; margin-bottom:0.2rem;" data-i18n="testimonials.t1.author">— Marie &amp; Jean</p>
          <p style="color:var(--color-text-light); font-size:0.9rem; margin:0;" data-i18n="testimonials.t1.context">Paris → Amsterdam · <em>Placeholder, full quote coming soon</em></p>
        </div>

        <!-- Placeholder 2: Team -->
        <div class="session-card" style="border-left:4px solid var(--color-primary);">
          <span class="session-number" style="width:auto; padding:0 12px; border-radius:20px; font-size:0.7rem; letter-spacing:0.05em;" data-i18n="testimonials.tag.team">TEAM · SCALE-UP</span>
          <p style="font-style:italic; font-size:1.05rem; line-height:1.7; margin:1rem 0;" data-i18n="testimonials.t2.quote">"Hélène helped our leadership team name the unspoken — the tensions we'd been dancing around for months. We came out with clarity, and more importantly, with trust. It reshaped how we work together."</p>
          <p style="font-weight:600; margin-bottom:0.2rem;" data-i18n="testimonials.t2.author">— Head of Product</p>
          <p style="color:var(--color-text-light); font-size:0.9rem; margin:0;" data-i18n="testimonials.t2.context">Tech scale-up, Netherlands · <em>Placeholder, full quote coming soon</em></p>
        </div>

        <!-- Placeholder 3: Partnership -->
        <div class="session-card" style="border-left:4px solid var(--color-primary);">
          <span class="session-number" style="width:auto; padding:0 12px; border-radius:20px; font-size:0.7rem; letter-spacing:0.05em;" data-i18n="testimonials.tag.partnership">PARTNERSHIP · CO-FOUNDERS</span>
          <p style="font-style:italic; font-size:1.05rem; line-height:1.7; margin:1rem 0;" data-i18n="testimonials.t3.quote">"We'd been business partners for four years and thought we were aligned. Hélène's systemic approach showed us the drift we hadn't seen. The conversations we had with her were the ones we'd been avoiding — and they saved the partnership."</p>
          <p style="font-weight:600; margin-bottom:0.2rem;" data-i18n="testimonials.t3.author">— Co-founders</p>
          <p style="color:var(--color-text-light); font-size:0.9rem; margin:0;" data-i18n="testimonials.t3.context">Consulting firm, EU · <em>Placeholder, full quote coming soon</em></p>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="testimonials.cta.title">Ready to write your own story?</h2>
      <p data-i18n="testimonials.cta.subtitle">Book a free 30-minute call to explore how systemic coaching could work for you.</p>
      <a href="/contact?source=testimonials" class="btn btn-primary" data-i18n="testimonials.cta.button">Book your free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
