<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages\Resources;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class OrscMethod
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'The ORSC® Method — Coaching Relationships as Living Systems | theweknows',
            titleI18nKey: 'resources.orscMethod.meta.title',
            description: 'ORSC is the gold-standard methodology for coaching couples, teams and organizations as living systems. A plain-language explainer of what it is, how it works, and why it matters.',
            descriptionI18nKey: 'resources.orscMethod.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="resources.orscMethod.hero.title">The ORSC® method</h1>
      <p class="subtitle" data-i18n="resources.orscMethod.hero.subtitle">Organization and Relationship Systems Coaching — the rigorous, systemic approach to coaching couples, teams and partnerships as living systems.</p>
    </div>
  </section>

  <!-- ===== BODY ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:760px; margin:0 auto;">

        <p style="font-size:1.1rem; margin-bottom:2rem;" data-i18n="resources.orscMethod.intro">ORSC is the core methodology Hélène uses when coaching couples, teams and business partnerships. It's more than a set of techniques — it's a way of seeing relationships that, once you've experienced it, changes what you think is possible.</p>

        <h2 data-i18n="resources.orscMethod.s1.title">What ORSC stands for</h2>
        <p data-i18n="resources.orscMethod.s1.p1"><strong>O</strong>rganization and <strong>R</strong>elationship <strong>S</strong>ystems <strong>C</strong>oaching. Developed by CRR Global (the Center for Right Relationship), it is the leading methodology for coaching relationships as systems, and it's accredited by the International Coaching Federation (ICF) as a Coach Specific Training Hour program.</p>
        <p data-i18n="resources.orscMethod.s1.p2">ORSC coaches are trained through a rigorous multi-module certification that combines live practice, supervision, and assessed competency. Becoming certified is not a weekend course. It is a commitment to a specific ethic and a specific craft.</p>

        <h2 data-i18n="resources.orscMethod.s2.title">The core principle: Deep Democracy</h2>
        <p data-i18n="resources.orscMethod.s2.p1">ORSC is built on a principle called <strong>Deep Democracy</strong>: the idea that every voice in a system matters, including the voices that are hard to hear, the voices nobody wants to speak, and the voice of the system itself. In practice, this means ORSC coaches make sure every part of the system gets heard — not because we're being polite, but because the parts that don't get heard are usually exactly where the change is hiding.</p>

        <h2 data-i18n="resources.orscMethod.s3.title">Four foundations of ORSC</h2>
        <p data-i18n="resources.orscMethod.s3.intro">ORSC rests on four core concepts. Together, they give a coach the toolkit to work with any relationship system — a couple, a leadership team, a founding partnership, a department in a company.</p>
        <ul style="padding-left:1.2rem; margin:1rem 0;">
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.orscMethod.s3.l1"><strong>Relationship Systems Intelligence.</strong> The capacity to see, hear and work with the relationship as a living entity, distinct from the individuals in it.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.orscMethod.s3.l2"><strong>Designed Alliance.</strong> An explicit agreement about how the system wants to work together — created and refreshed on purpose, not left to chance.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.orscMethod.s3.l3"><strong>Lands &amp; Ghosts.</strong> A way of mapping the "territory" of the system — where it's fertile, where it's stuck, and what's hidden in the shadows.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.orscMethod.s3.l4"><strong>Toxic behaviors &amp; antidotes.</strong> A clear-eyed look at the patterns that kill relationships (criticism, contempt, defensiveness, stonewalling — yes, that's Gottman's work integrated in) and the practices that heal them.</li>
        </ul>

        <h2 data-i18n="resources.orscMethod.s4.title">What an ORSC session feels like</h2>
        <p data-i18n="resources.orscMethod.s4.p1">ORSC is embodied, active, and often surprising. A session might involve standing up and walking to different parts of the room to speak from different perspectives. It might involve the coach inviting you to speak from the voice of "the us," not just from your own voice. It might involve naming a dynamic you've been living inside for years and suddenly seeing it clearly for the first time.</p>
        <p data-i18n="resources.orscMethod.s4.p2">What it doesn't feel like is a lecture or a checklist. ORSC is rigorous, but it is not clinical. It is warm, but it is not vague. It is a practice, and like all good practices, its real effects show up in how you live afterwards.</p>

        <h2 data-i18n="resources.orscMethod.s5.title">Why ORSC matters for couples, teams and partnerships</h2>
        <p data-i18n="resources.orscMethod.s5.p1">Most coaching approaches are built for individuals. ORSC is built from the ground up for relationships. That makes it uniquely suited to the kinds of work theweknows does: helping couples rebuild their "us" through transitions, helping leadership teams get real about trust and safety, helping founders and business partners align at key moments in the life of their business.</p>
        <p data-i18n="resources.orscMethod.s5.p2">If you want to experience what ORSC looks like in practice, the best way is to book a free chemistry call. You'll get a small taste of the methodology — and you'll know within 30 minutes whether it resonates with you.</p>

      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="resources.orscMethod.cta.title">Experience ORSC firsthand</h2>
      <p data-i18n="resources.orscMethod.cta.subtitle">Book a free 30-minute call with Hélène, a certified ORSC coach.</p>
      <a href="/contact?source=resources-orsc-method" class="btn btn-primary" data-i18n="resources.orscMethod.cta.button">Book a free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
