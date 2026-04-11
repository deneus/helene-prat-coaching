<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages\Resources;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class Faq
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Frequently Asked Questions | theweknows',
            titleI18nKey: 'resources.faq.meta.title',
            description: 'Answers to the most common questions about coaching with theweknows — price, sessions, formats, coaching vs therapy, and more.',
            descriptionI18nKey: 'resources.faq.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="resources.faq.hero.title">Frequently asked questions</h1>
      <p class="subtitle" data-i18n="resources.faq.hero.subtitle">The questions we get the most — answered honestly.</p>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:760px; margin:0 auto;">

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;" open>
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q1.q">What is the difference between coaching and therapy?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q1.a">Therapy is a clinical practice that helps people heal wounds and address mental-health challenges. Coaching is a forward-facing practice that helps functioning individuals, couples and teams grow — it's an investment, not a remedy. We've written the full answer on <a href="/resources/coaching-vs-therapy">our dedicated page</a>.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q2.q">How much does it cost?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q2.a">Pricing is discussed during your free chemistry call. It depends on the scope of work, the length of the engagement, and whether it's a couple, a team or a partnership. We don't publish fixed prices because we don't sell a fixed product — every engagement is tailored. What we can tell you: our pricing is fair, transparent, and sits in the professional coaching range.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q3.q">How many sessions do we need?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q3.a">The typical engagement is 4–6 sessions spread over 2–3 months. Some couples or teams go further. Some decide they have what they need after the first few sessions. The exact shape is co-designed with you during the chemistry call, based on what you're actually working on.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q4.q">Do you work online or in-person?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q4.a">Both. Hélène is based in Hilversum (Netherlands), so in-person sessions are easy across the Netherlands, and accessible for clients willing to travel. For clients outside the Netherlands — which is most of our couples audience — sessions happen online via video. Team engagements are typically mixed: at least one in-person kickoff, then online for the follow-ups, whenever logistics allow.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q5.q">In which languages do you coach?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q5.a">English and French. Hélène is a native French speaker and has worked in English-speaking environments for over 15 years. She is equally comfortable in either language, and will adapt to what feels most natural for you.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q6.q">What is a "chemistry call"?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q6.a">It's a free 30-minute conversation — no agenda, no pitch, no pressure. You tell Hélène what you're working on. She asks questions. You both get a sense of whether there's a fit. By the end of the call you'll know whether to move forward, and Hélène will know whether she's the right coach for your system. About a third of chemistry calls don't lead to coaching, and that's by design — we'd rather you go to the right coach than to us.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q7.q">Do I have to be "broken" to benefit from coaching?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q7.a">No — and this is one of the most important things to understand about coaching. Coaching is for couples, teams and partnerships that are functioning and want to grow on purpose. It is not a remedy for dysfunction; it is an investment in getting better at the things that matter. Some of our most rewarding work is with clients who, on paper, "don't need" coaching — and walk away with outcomes they didn't know were possible.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q8.q">What if we start and it's not working?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q8.a">You can stop at any time. Coaching is a partnership, not a subscription trap. If at any point you feel the work isn't moving things in the right direction, we talk about it openly — and either course-correct or end the engagement cleanly. Your time and money should only stay committed as long as the work is genuinely serving you.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px; margin-bottom:1rem;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q9.q">Is what we discuss confidential?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q9.a">Yes. Hélène operates under the International Coaching Federation (ICF) Code of Ethics, which mandates strict confidentiality. Nothing you share in a session leaves the session — with the only exceptions being situations where there is an immediate safety concern or a legal obligation, both of which are vanishingly rare in coaching contexts.</p>
        </details>

        <details style="background:var(--color-bg-alt); padding:1.5rem 2rem; border-radius:12px;">
          <summary style="font-family:var(--font-heading); font-size:1.3rem; font-weight:700; cursor:pointer;" data-i18n="resources.faq.q10.q">I'm still not sure. What should I do?</summary>
          <p style="margin-top:1rem;" data-i18n="resources.faq.q10.a">Book the chemistry call. That's literally what it's for. It's 30 minutes, it's free, there's zero commitment, and it's the simplest way to find out whether coaching is the right next step for you. If it's not, Hélène will tell you — and when she can, point you toward what would actually serve you.</p>
        </details>

      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="resources.faq.cta.title">Still have questions?</h2>
      <p data-i18n="resources.faq.cta.subtitle">The best way to get them answered is a free 30-minute chemistry call with Hélène.</p>
      <a href="/contact?source=resources-faq" class="btn btn-primary" data-i18n="resources.faq.cta.button">Book a free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
