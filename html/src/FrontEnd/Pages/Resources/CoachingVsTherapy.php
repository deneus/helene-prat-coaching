<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages\Resources;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class CoachingVsTherapy
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'Coaching vs Therapy: A Clear Answer | theweknows',
            titleI18nKey: 'resources.coachingVsTherapy.meta.title',
            description: 'What is the real difference between coaching and therapy? A clear, honest answer — and how to know which one you actually need. By theweknows.',
            descriptionI18nKey: 'resources.coachingVsTherapy.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="resources.coachingVsTherapy.hero.title">Coaching vs Therapy — the honest answer</h1>
      <p class="subtitle" data-i18n="resources.coachingVsTherapy.hero.subtitle">The one question almost everyone asks. Here is the clear version — and how to know which one you actually need.</p>
    </div>
  </section>

  <!-- ===== BODY ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:760px; margin:0 auto;">

        <p style="font-size:1.1rem; margin-bottom:2rem;" data-i18n="resources.coachingVsTherapy.intro">If you've ever hesitated to say yes to coaching because it sounded vaguely like therapy, you're not alone. The two words get used interchangeably, the boundaries feel blurry, and nobody wants to sign up for the wrong thing. So let's be specific.</p>

        <h2 data-i18n="resources.coachingVsTherapy.s1.title">The short version</h2>
        <p data-i18n="resources.coachingVsTherapy.s1.p1"><strong>Therapy</strong> is a clinical practice, usually delivered by a licensed mental-health professional, that helps people heal wounds, process trauma, and recover from mental-health challenges. It looks backward to understand where pain comes from, and forward to reduce its hold on the present.</p>
        <p data-i18n="resources.coachingVsTherapy.s1.p2"><strong>Coaching</strong> is a forward-facing, non-clinical partnership that helps individuals, couples and teams define what they want, surface what's in the way, and build the concrete practices to get there. It assumes you are fundamentally healthy and resourceful, and works with the resources you already have.</p>
        <p style="background:var(--color-accent-light); padding:1.2rem 1.5rem; border-radius:12px; margin:1.5rem 0;" data-i18n="resources.coachingVsTherapy.s1.pull"><strong>The shortest possible version:</strong> Therapy helps you heal. Coaching helps you grow. You don't need to be broken to benefit from coaching — and if you are actually hurting, therapy will probably serve you better.</p>

        <h2 data-i18n="resources.coachingVsTherapy.s2.title">Six concrete differences</h2>
        <p data-i18n="resources.coachingVsTherapy.s2.intro">When people ask us this question, they're usually trying to figure out which one fits their situation. Here are the differences that actually matter in practice:</p>
        <ul style="padding-left:1.2rem; margin:1rem 0 2rem;">
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.coachingVsTherapy.s2.l1"><strong>Direction of time.</strong> Therapy often explores the past to heal its effects. Coaching mostly looks at the present and the future — what you want, what's in the way, what's next.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.coachingVsTherapy.s2.l2"><strong>Starting assumption.</strong> Therapy assumes there is something that needs healing. Coaching assumes you are whole, and focuses on growth.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.coachingVsTherapy.s2.l3"><strong>Professional frame.</strong> Therapists are licensed clinicians bound by medical or paramedical regulations. Coaches are certified professionals bound by professional ethics and a coaching methodology — not clinical ones.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.coachingVsTherapy.s2.l4"><strong>Scope of work.</strong> Therapy can address diagnosable conditions — anxiety disorders, depression, trauma, addictions. Coaching does not diagnose or treat any of these, and refers you to a clinician if they surface.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.coachingVsTherapy.s2.l5"><strong>Rhythm.</strong> Therapy is often weekly and ongoing. Coaching is usually a defined engagement (e.g. 4–6 sessions over 3 months) with clear outcomes in mind.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.coachingVsTherapy.s2.l6"><strong>Unit of work.</strong> Therapy typically works with individuals. <em>Systemic</em> coaching — the kind we do at theweknows — works with the relationship system itself: the couple, the team, the partnership, as a living entity in the room.</li>
        </ul>

        <h2 data-i18n="resources.coachingVsTherapy.s3.title">How do I know which one I need?</h2>
        <p data-i18n="resources.coachingVsTherapy.s3.intro">This is the question that actually matters. Here is how to think about it:</p>
        <p data-i18n="resources.coachingVsTherapy.s3.p1"><strong>Therapy is probably what you need if:</strong> you are experiencing symptoms that are interfering with your daily life (persistent low mood, anxiety that grips you, panic attacks, trauma flashbacks, disordered eating, substance dependency), or if you are working through a loss, an abuse history, or a mental-health diagnosis. A therapist is trained and regulated to hold all of that safely.</p>
        <p data-i18n="resources.coachingVsTherapy.s3.p2"><strong>Coaching is probably a better fit if:</strong> you are functioning well but you want to grow, decide, or change — as an individual, a couple, a team, or a business partnership. You want forward motion, concrete practices, and a partner who helps you see the system you're inside.</p>
        <p data-i18n="resources.coachingVsTherapy.s3.p3">And if you're not sure? We'll help you figure it out during your free chemistry call. If therapy would serve you better, Hélène will tell you honestly and, when she can, point you in the right direction. A good coach knows the limits of coaching.</p>

        <h2 data-i18n="resources.coachingVsTherapy.s4.title">One last thing: coaching is an investment, not a remedy</h2>
        <p data-i18n="resources.coachingVsTherapy.s4.p1">We meet a lot of people who assume they'd need to be "broken" to deserve coaching. That framing is wrong — and it keeps people from growth they're ready for. Coaching is how high-functioning couples, teams and partners <em>deliberately</em> get better at the things that matter to them. It is, in the truest sense, an investment in yourself, in your people, and in the system you live inside.</p>
        <p data-i18n="resources.coachingVsTherapy.s4.p2">You don't wait until your company is failing to hire a CFO. You don't wait until you're sick to start exercising. The same logic applies here.</p>

      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="resources.coachingVsTherapy.cta.title">Still not sure which one you need?</h2>
      <p data-i18n="resources.coachingVsTherapy.cta.subtitle">Book a free 30-minute call with Hélène. We'll talk honestly about what you're working on and whether coaching is the right next step.</p>
      <a href="/contact?source=resources-coaching-vs-therapy" class="btn btn-primary" data-i18n="resources.coachingVsTherapy.cta.button">Book a free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
