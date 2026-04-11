<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class CouplesHub
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Couples Coaching — Rebuild the "Us" That Made Sense | theweknows',
            titleI18nKey: 'couples.meta.title',
            description: 'Systemic coaching for couples navigating drift, life milestones, or simply ready to grow. By theweknows and certified ORSC coach Hélène Prat. Online and in-person (Hilversum, NL).',
            descriptionI18nKey: 'couples.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="couples.hero.title">The love is still there — but something has shifted</h1>
      <p class="subtitle" data-i18n="couples.hero.subtitle">Systemic coaching for couples who want more than "it's fine." For drift, life milestones, or intentional growth.</p>
      <a href="/contact?source=couples" class="btn btn-primary" data-i18n="couples.hero.cta">Book a Chemistry Call</a>
      <p class="hero-hook" data-i18n="couples.hero.hook">You know the small gap. The one that wasn't there a year ago. The conversations you've started sidestepping, the plans you used to make together that now happen in parallel. The spark you remember — and notice you haven't felt lately. You're not broken. You're in transition. And transitions don't fix themselves.</p>
    </div>
  </section>

  <!-- ===== THE NEED (PAS) ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:820px; margin:0 auto;">
        <h2 style="text-align:center;" data-i18n="couples.need.title">Three reasons couples come to us</h2>
        <p style="text-align:center; color:var(--color-text-light); margin-bottom:2.5rem;" data-i18n="couples.need.subtitle">You don't need a crisis to need a conversation that changes things.</p>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px; margin-bottom:1.5rem;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="couples.need.n1.title">1. "Things aren't what they used to be."</h3>
          <p data-i18n="couples.need.n1.desc">Somewhere between the busy years and the shared logistics, the vibe of your early days went quiet. You still love each other. You're just not sure how to get <em>that</em> back — or what "that" even looks like now that you're different people. <strong>Coaching helps you find out.</strong></p>
        </div>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px; margin-bottom:1.5rem;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="couples.need.n2.title">2. A big life event is reshaping you</h3>
          <p data-i18n="couples.need.n2.desc">Getting married. Buying a house. Having a child. Career pivots. Each of these is a transition, and transitions quietly reshape the agreements you made together — sometimes without either of you noticing. <strong>Coaching turns these milestones into a shared project, not a fault line.</strong></p>
        </div>

        <div style="background:var(--color-bg-alt); padding:2rem; border-radius:16px;">
          <h3 style="color:var(--color-primary); margin-bottom:0.8rem;" data-i18n="couples.need.n3.title">3. You're solid — and you want to grow</h3>
          <p data-i18n="couples.need.n3.desc">You're the couple your friends envy. You communicate well. You respect each other. <strong>And you know there's another level.</strong> Coaching isn't only for couples who are struggling. Some of our most rewarding work is with couples who are already thriving and want an honest, rigorous space to go deeper together.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== RELOCATION TEASER ===== -->
  <section class="gains">
    <div class="container">
      <div style="max-width:780px; margin:0 auto; text-align:center;">
        <h2 style="color:var(--color-white);" data-i18n="couples.relocation.title">Is relocation part of your story?</h2>
        <p style="color:var(--color-white); font-size:1.1rem; margin-bottom:2rem;" data-i18n="couples.relocation.subtitle">If you've recently moved to a new country — or are about to — we've built a dedicated program for you. <em>Rooted Together</em> is a 6-session systemic journey tailored to the particular shape of expat-couple transitions: grief, unbalance, new identity, rooting.</p>
        <a href="/couples/relocation" class="btn btn-white" data-i18n="couples.relocation.cta">Discover Rooted Together →</a>
      </div>
    </div>
  </section>

  <!-- ===== WHY BE COACHED ===== -->
  <section class="for-you">
    <div class="container">
      <h2 class="text-center" data-i18n="couples.why.title">Why coaching (and not just waiting it out)</h2>
      <p class="section-subtitle" data-i18n="couples.why.subtitle">Most couples don't talk about the system they live in — because they're too busy living in it.</p>
      <div class="criteria-grid">
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 2"/></svg>
          </div>
          <h3 data-i18n="couples.why.c1.title">You see the system</h3>
          <p data-i18n="couples.why.c1.desc">Coaching gives you a neutral space to look at "us" from the outside — the pattern you're living inside every day without being able to name it.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/></svg>
          </div>
          <h3 data-i18n="couples.why.c2.title">You choose, on purpose</h3>
          <p data-i18n="couples.why.c2.desc">Instead of drifting into the next chapter, you decide — together — what you want it to look like. Coaching makes the implicit explicit.</p>
        </div>
        <div class="criteria-card">
          <div class="criteria-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3 data-i18n="couples.why.c3.title">You build tools that last</h3>
          <p data-i18n="couples.why.c3.desc">This isn't therapy processing the past. Coaching leaves you with concrete practices — for conversations, decisions, and rituals — that outlast the sessions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== THE OFFER ===== -->
  <section class="program">
    <div class="container">
      <div class="program-intro">
        <h2 data-i18n="couples.offer.title">The program</h2>
        <p class="program-intro-text" data-i18n="couples.offer.intro">A structured but flexible journey. We adapt the number and rhythm of sessions to the depth of what you want to work on. Below is the standard shape — we adjust together during your free chemistry call.</p>
      </div>
      <div class="program-details">
        <div class="program-detail">
          <span class="detail-value">6</span>
          <span class="detail-label" data-i18n="couples.offer.d1">sessions (typical)</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">90</span>
          <span class="detail-label" data-i18n="couples.offer.d2">min each</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">3</span>
          <span class="detail-label" data-i18n="couples.offer.d3">months rhythm</span>
        </div>
        <div class="program-detail">
          <span class="detail-value">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </span>
          <span class="detail-label" data-i18n="couples.offer.d4">online or in-person</span>
        </div>
      </div>
      <p style="text-align:center; margin-top:2rem; color:var(--color-text-light);" data-i18n="couples.offer.pricing">Pricing discussed during the chemistry call — so we can tailor the program to what you actually need.</p>
    </div>
  </section>

  <!-- ===== COACHING ≠ THERAPY MINI ===== -->
  <section class="about" style="padding-top:60px; padding-bottom:60px;">
    <div class="container">
      <div style="max-width:720px; margin:0 auto; text-align:center; background:var(--color-accent-light); padding:2rem 2.5rem; border-radius:16px;">
        <h3 style="margin-bottom:0.8rem;" data-i18n="couples.notTherapy.title">A note: this isn't couple's therapy</h3>
        <p style="margin-bottom:1rem;" data-i18n="couples.notTherapy.desc">Therapy helps heal wounds from the past. Coaching helps you build the future you actually want — starting from where you are now. Hélène is a certified coach, not a therapist. If therapy is what you need, she'll tell you.</p>
        <a href="/resources/coaching-vs-therapy" data-i18n="couples.notTherapy.link">Read the full answer →</a>
      </div>
    </div>
  </section>

  <!-- ===== WHY HÉLÈNE ===== -->
  <section class="gains">
    <div class="container">
      <h2 data-i18n="couples.whyHelene.title">Why work with Hélène</h2>
      <div class="gains-list">
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="couples.whyHelene.w1">Certified in ORSC® — a systemic methodology that treats the "us" as a third entity worth listening to.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="couples.whyHelene.w2">20 years of experience reading relational dynamics — she has spent two decades watching what makes people and teams work (or break).</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="couples.whyHelene.w3">A warm, grounded presence — rigorous without being clinical, honest without being harsh.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="couples.cta.title">Ready for a different conversation?</h2>
      <p data-i18n="couples.cta.subtitle">Book a free 30-minute chemistry call with Hélène. No commitment, no pressure — just a real conversation to see if this feels like your next step.</p>
      <a href="/contact?source=couples" class="btn btn-primary" data-i18n="couples.cta.button">Book your free chemistry call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
