<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class CouplesRelocation
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Rooted Together — Couples Coaching for Expat Relocation | theweknows',
            titleI18nKey: 'couplesRelocation.meta.title',
            description: 'Rooted Together: a 6-session systemic coaching program for expat couples navigating relocation, by theweknows. Rebuild your "us" in a new country — with certified ORSC coach Hélène Prat.',
            descriptionI18nKey: 'couplesRelocation.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="couplesRelocation.hero.title">Rooted Together — coaching for couples in relocation</h1>
      <p class="subtitle" data-i18n="couplesRelocation.hero.subtitle">A 6-session systemic coaching program for expat couples who want more than to "just cope" with the move.</p>
      <a href="/contact?source=couples-relocation" class="btn btn-primary" data-i18n="couplesRelocation.hero.cta">Book a Chemistry Call</a>
      <p class="hero-hook" data-i18n="couplesRelocation.hero.hook">Have you ever felt like you and your partner are living the same move, yet experiencing two completely different realities? One of you thrives on the adventure, while the other quietly mourns what was left behind. The gap isn't geography — it's what happens when big transitions go unspoken.</p>
    </div>
  </section>

  <!-- ===== THE NEED ===== -->
  <section class="about" id="need">
    <div class="container">
      <div class="about-content" style="max-width:820px; margin:0 auto;">
        <h2 data-i18n="couplesRelocation.need.title">A new chapter — and a hidden transition</h2>
        <p data-i18n="couplesRelocation.need.p1">Relocating to a new country is a mix of hopes, dreams, grief, and imbalance. You signed up for the adventure, but underneath the surface, something shifts. One of you lands on their feet — new job, new network, a clear sense of purpose. The other is building a life from scratch, often invisibly.</p>
        <p data-i18n="couplesRelocation.need.p2">These different paces are normal. What's not sustainable is ignoring them. Left unspoken, they harden into resentment, distance, or silent bargains that nobody agreed to. Coaching is how you turn this transition into a shared project rather than a fault line.</p>
        <p data-i18n="couplesRelocation.need.p3">The question this program helps you answer: <strong>How do we build together our new normal — and root ourselves in our new life?</strong></p>
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
        <p class="program-intro-text" data-i18n-html="program.intro">Relocating to a new country is exciting — and also disorienting. You juggle visas, housing, schools, and a new culture, while underneath the surface your relationship is also going through a major transition. We have crafted a coaching program specially for expats to help you navigate this transition as a team — so you don't just move country, you build a new life that feels like home for both of you.</p>
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
          <h3 data-i18n="session5.title">Rooting in your new country</h3>
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
          <p data-i18n="criteria1.desc">You have recently relocated or are preparing to move.</p>
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
          <span data-i18n="gain3">Clarity on how to honor what you've left behind while creating meaningful roots in your new country.</span>
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

  <!-- ===== CTA ===== -->
  <section class="contact" id="contact-cta">
    <div class="container">
      <h2 data-i18n="couplesRelocation.cta.title">Curious if this is right for you?</h2>
      <p data-i18n="couplesRelocation.cta.subtitle">Book a free 30-minute chemistry call to explore your situation and see how we can work together.</p>
      <a href="/contact?source=couples-relocation" class="btn btn-primary" data-i18n="couplesRelocation.cta.button">Book a Chemistry Call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
