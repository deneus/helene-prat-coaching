<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class Partnerships
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Business Partnership Coaching — Align, Scale, Re-root | theweknows',
            titleI18nKey: 'partnerships.meta.title',
            description: 'Systemic coaching for co-founders and business partners. For new partnerships setting up for success, growth-stage drift, or partnerships in transition. By theweknows and certified ORSC coach Hélène Prat.',
            descriptionI18nKey: 'partnerships.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="partnerships.hero.title">You started this together. Don't drift apart in silence.</h1>
      <p class="subtitle" data-i18n="partnerships.hero.subtitle">Systemic coaching for co-founders and business partners — at the start, at scale, or in the hard moments.</p>
      <a href="/contact?source=partnerships" class="btn btn-primary" data-i18n="partnerships.hero.cta">Book a free consultation</a>
      <p class="hero-hook" data-i18n="partnerships.hero.hook">Most partnerships don't end in a blow-up. They end in a slow, quiet drift — two people who used to finish each other's sentences, now talking past each other in weekly syncs they both dread. The hard conversations never happen, and then one day there's nothing left to save. Coaching is the deliberate space where those conversations happen on your terms, before the drift is irreversible.</p>
    </div>
  </section>

  <!-- ===== THE NEED (PAS) ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:820px; margin:0 auto;">
        <h2 style="text-align:center;" data-i18n="partnerships.need.title">Three moments in a partnership that coaching is made for</h2>
        <p style="text-align:center; color:var(--color-text-light); margin-bottom:2.5rem;" data-i18n="partnerships.need.subtitle">The partnerships that last aren't the ones without tension. They're the ones that made space for it — early, and often.</p>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px; margin-bottom:1.5rem;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="partnerships.need.n1.title">1. Forming a new partnership — on purpose</h3>
          <p data-i18n="partnerships.need.n1.desc">You're excited. You trust each other. You want to build something real. Most partnerships skip the part where you agree — out loud, specifically — on how you'll handle the hard stuff before the hard stuff shows up. <strong>Coaching turns your launch into a shared foundation, not a handshake and a leap.</strong></p>
        </div>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px; margin-bottom:1.5rem;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="partnerships.need.n2.title">2. Taking the business to the next level</h3>
          <p data-i18n="partnerships.need.n2.desc">You've found your stride, and now the business is outgrowing the way you work together. New decisions. New roles. New stakes. <strong>Coaching helps the partnership level up alongside the business — so you don't become the bottleneck of your own success.</strong></p>
        </div>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="partnerships.need.n3.title">3. Things aren't working like they used to</h3>
          <p data-i18n="partnerships.need.n3.desc">Something has shifted, and you're both feeling it. The meetings are colder. The texts are shorter. You've started thinking in "I" instead of "we." <strong>Coaching gives you a rigorous, honest space to name what's happening — and decide together what to do about it, while you still can.</strong></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHY SYSTEMIC ===== -->
  <section class="for-you">
    <div class="container">
      <h2 class="text-center" data-i18n="partnerships.why.title">Why systemic coaching for partnerships</h2>
      <p class="section-subtitle" data-i18n="partnerships.why.subtitle">Because "the partnership" is not the sum of two people — it's a third entity, with its own voice, its own needs, and its own trajectory.</p>
      <div class="criteria-grid">
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="8" r="6"/><circle cx="16" cy="16" r="6"/></svg>
          </div>
          <h3 data-i18n="partnerships.why.c1.title">We coach the "us," not the individuals</h3>
          <p data-i18n="partnerships.why.c1.desc">Individual coaching is great — but it can't see the patterns that live between you. Systemic coaching brings the partnership itself into the room as a living thing worth listening to.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l9 4.9V17l-9 4.9L3 17V6.9z"/></svg>
          </div>
          <h3 data-i18n="partnerships.why.c2.title">We build agreements that actually hold</h3>
          <p data-i18n="partnerships.why.c2.desc">Most partnerships run on assumptions nobody has ever stated. Coaching makes those implicit contracts explicit — so they can be honored, updated, or renegotiated without a crisis.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3 data-i18n="partnerships.why.c3.title">We catch drift before it becomes damage</h3>
          <p data-i18n="partnerships.why.c3.desc">The cost of drift goes up exponentially with time. Coaching gives you a regular rhythm to look at the system together — so small misalignments stay small.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== THE OFFER ===== -->
  <section class="program">
    <div class="container">
      <div class="program-intro">
        <h2 data-i18n="partnerships.offer.title">The engagement</h2>
        <p class="program-intro-text" data-i18n="partnerships.offer.intro">Every partnership engagement is custom-scoped. Below is the standard rhythm — we design the exact shape together during your free consultation.</p>
      </div>
      <div class="program-details">
        <div class="program-detail">
          <span class="detail-value">4–6</span>
          <span class="detail-label" data-i18n="partnerships.offer.d1">sessions</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">90</span>
          <span class="detail-label" data-i18n="partnerships.offer.d2">min each</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">3</span>
          <span class="detail-label" data-i18n="partnerships.offer.d3">months rhythm</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </span>
          <span class="detail-label" data-i18n="partnerships.offer.d4">online or in-person</span>
        </div>
      </div>
      <p style="text-align:center; margin-top:2rem; color:var(--color-text-light);" data-i18n="partnerships.offer.pricing">Pricing is discussed during the free consultation — fair for you, fair for the depth of work we'll do.</p>
    </div>
  </section>

  <!-- ===== COACHING ≠ THERAPY MINI ===== -->
  <section class="about" style="padding-top:60px; padding-bottom:60px;">
    <div class="container">
      <div style="max-width:720px; margin:0 auto; text-align:center; background:var(--color-accent-light); padding:2rem 2.5rem; border-radius:16px;">
        <h3 style="margin-bottom:0.8rem;" data-i18n="partnerships.notTherapy.title">A note: this isn't mediation</h3>
        <p style="margin-bottom:1rem;" data-i18n="partnerships.notTherapy.desc">Coaching isn't there to referee a dispute. It's there to help both of you see the system clearly and decide, together, what you want it to become. Hélène is a certified systems coach, not a mediator or therapist.</p>
        <a href="/resources/coaching-vs-therapy" data-i18n="partnerships.notTherapy.link">Read more →</a>
      </div>
    </div>
  </section>

  <!-- ===== WHY HÉLÈNE ===== -->
  <section class="gains">
    <div class="container">
      <h2 data-i18n="partnerships.whyHelene.title">Why work with Hélène</h2>
      <div class="gains-list">
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="partnerships.whyHelene.w1">20 years inside real businesses — she has coached founders, partners and leadership teams through launches, scale-ups, and breakups.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="partnerships.whyHelene.w2">Certified ORSC systems coach — trained in the gold-standard methodology for coaching relationships as living systems.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="partnerships.whyHelene.w3">Speaks the language of business — not abstract coaching jargon. She gets what's actually at stake when you're running a company together.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="partnerships.cta.title">Let's have the honest conversation first</h2>
      <p data-i18n="partnerships.cta.subtitle">A free 30-minute consultation with Hélène. Scope what you're actually working on. Decide together whether coaching is the right next move.</p>
      <a href="/contact?source=partnerships" class="btn btn-primary" data-i18n="partnerships.cta.button">Book a free consultation</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
