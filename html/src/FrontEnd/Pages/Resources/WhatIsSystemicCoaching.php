<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages\Resources;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class WhatIsSystemicCoaching
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'What is Systemic Coaching? | theweknows',
            titleI18nKey: 'resources.whatIsSystemicCoaching.meta.title',
            description: 'Systemic coaching treats the relationship — couple, team, partnership — as a living system with its own voice. A plain-language explainer from theweknows.',
            descriptionI18nKey: 'resources.whatIsSystemicCoaching.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="resources.whatIsSystemicCoaching.hero.title">What is systemic coaching?</h1>
      <p class="subtitle" data-i18n="resources.whatIsSystemicCoaching.hero.subtitle">The short answer: it treats your couple, your team, or your partnership as a living system — and works with it, instead of the individuals in it.</p>
    </div>
  </section>

  <!-- ===== BODY ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:760px; margin:0 auto;">

        <p style="font-size:1.1rem; margin-bottom:2rem;" data-i18n="resources.whatIsSystemicCoaching.intro">Most coaching works one-on-one. You have a coach, you set your goals, you work your plan. Systemic coaching does something different — and once you see the difference, it's hard to unsee.</p>

        <h2 data-i18n="resources.whatIsSystemicCoaching.s1.title">The core idea: the system is a third entity</h2>
        <p data-i18n="resources.whatIsSystemicCoaching.s1.p1">When two people live or work together, they create a third thing: <em>the relationship itself</em>. The "us." The team culture. The partnership dynamic. It has its own voice, its own patterns, and its own life. You can feel it when you walk into a room where a team is functioning well — and you can feel the absence of it when a couple has stopped listening to each other, even if they're both still physically present.</p>
        <p data-i18n="resources.whatIsSystemicCoaching.s1.p2">Systemic coaching is built on a single insight: this third entity is real, and it's worth listening to. The challenges couples and teams face usually can't be solved by fixing the individuals — they need to be addressed at the level of the system.</p>

        <h2 data-i18n="resources.whatIsSystemicCoaching.s2.title">What it looks like in practice</h2>
        <p data-i18n="resources.whatIsSystemicCoaching.s2.p1">A systemic coaching session doesn't feel like two individual coaching sessions stacked together. It feels more like a facilitated conversation <em>with</em> the relationship, not just the people in it. The coach helps the system name what's happening, surface the patterns nobody has been able to articulate, and make conscious choices about what the system wants to become.</p>
        <p data-i18n="resources.whatIsSystemicCoaching.s2.p2">Practically, this might look like:</p>
        <ul style="padding-left:1.2rem; margin:1rem 0;">
          <li style="margin-bottom:0.6rem;" data-i18n="resources.whatIsSystemicCoaching.s2.l1">Asking the couple or team to speak from the voice of "the us" — what does the partnership itself want?</li>
          <li style="margin-bottom:0.6rem;" data-i18n="resources.whatIsSystemicCoaching.s2.l2">Mapping the system's current dynamics in space, with real objects or movement, so everyone can see what they're living inside.</li>
          <li style="margin-bottom:0.6rem;" data-i18n="resources.whatIsSystemicCoaching.s2.l3">Surfacing the unspoken agreements that have been shaping behavior — and deciding together whether to keep, update, or release them.</li>
          <li style="margin-bottom:0.6rem;" data-i18n="resources.whatIsSystemicCoaching.s2.l4">Building rituals and practices that the system can use when the coach isn't there.</li>
        </ul>

        <h2 data-i18n="resources.whatIsSystemicCoaching.s3.title">Where it comes from: ORSC®</h2>
        <p data-i18n="resources.whatIsSystemicCoaching.s3.p1">The systemic coaching methodology Hélène uses is called <strong>ORSC</strong> — Organization and Relationship Systems Coaching. Developed by CRR Global, it is the gold-standard approach to coaching relationships as living systems. It is rigorous, ethically grounded, and deeply practical. Hélène is a certified ORSC practitioner.</p>
        <p data-i18n="resources.whatIsSystemicCoaching.s3.p2">Learn more in our dedicated explainer on <a href="/resources/orsc-method">the ORSC method</a>.</p>

        <h2 data-i18n="resources.whatIsSystemicCoaching.s4.title">Why it works where other approaches don't</h2>
        <p data-i18n="resources.whatIsSystemicCoaching.s4.p1">Individual coaching is powerful — but it has a blind spot: the patterns that live between people. You can coach each partner in a couple separately and still miss the dance they do together. You can upskill every member of a team and still have a team that can't decide on anything. The system has a logic of its own, and working at the individual level can only take you so far.</p>
        <p data-i18n="resources.whatIsSystemicCoaching.s4.p2">Systemic coaching changes the unit of work. Instead of asking "how do we fix each person?", it asks "what does this system need?" — and the answer is often very different from what any individual would have guessed.</p>

        <h2 data-i18n="resources.whatIsSystemicCoaching.s5.title">Is it right for you?</h2>
        <p data-i18n="resources.whatIsSystemicCoaching.s5.p1">Systemic coaching is a fit if: you are a couple, a team, or a business partnership, and you are ready to look honestly at the system you're inside. You don't need to be in crisis. You do need to be willing to make the implicit explicit, and to let the coach hold a space for the third voice — the voice of the relationship itself.</p>
        <p data-i18n="resources.whatIsSystemicCoaching.s5.p2">If that sounds like what you're looking for, a free chemistry call is the best way to find out if it's the right fit.</p>

      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="resources.whatIsSystemicCoaching.cta.title">Curious to experience it?</h2>
      <p data-i18n="resources.whatIsSystemicCoaching.cta.subtitle">Book a free 30-minute call with Hélène. No commitment, just a real conversation.</p>
      <a href="/contact?source=resources-what-is-systemic-coaching" class="btn btn-primary" data-i18n="resources.whatIsSystemicCoaching.cta.button">Book a free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
