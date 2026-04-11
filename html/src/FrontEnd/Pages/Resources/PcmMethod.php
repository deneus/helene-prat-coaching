<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages\Resources;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class PcmMethod
{
    public static function render(): string
    {
        $header = Header::render(
            title: 'The PCM Model — Process Communication Explained | theweknows',
            titleI18nKey: 'resources.pcmMethod.meta.title',
            description: 'PCM (Process Communication Model) is a powerful framework for understanding personality, motivation, and what happens under stress. A plain-language explainer.',
            descriptionI18nKey: 'resources.pcmMethod.meta.description',
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="resources.pcmMethod.hero.title">The Process Communication Model (PCM)</h1>
      <p class="subtitle" data-i18n="resources.pcmMethod.hero.subtitle">A practical framework for understanding personality, motivation, and what happens when we're under stress — and how to communicate across differences without losing each other.</p>
    </div>
  </section>

  <!-- ===== BODY ===== -->
  <section class="about">
    <div class="container">
      <div class="about-content" style="max-width:760px; margin:0 auto;">

        <p style="font-size:1.1rem; margin-bottom:2rem;" data-i18n="resources.pcmMethod.intro">Most conflict isn't about what people disagree on. It's about how they communicate about it. PCM is a tool Hélène uses to help individuals, couples and teams understand the patterns under their communication — and shift them when they're getting in the way.</p>

        <h2 data-i18n="resources.pcmMethod.s1.title">Where PCM comes from</h2>
        <p data-i18n="resources.pcmMethod.s1.p1">PCM was developed in the 1970s by Dr. Taibi Kahler, an American clinical psychologist. NASA used his work to select and support astronaut teams on early space missions, specifically because they needed a framework to predict how people would communicate under extreme stress. Today PCM is used worldwide — in leadership development, team building, parenting, education, healthcare, and the kind of communication coaching we do at theweknows.</p>
        <p data-i18n="resources.pcmMethod.s1.p2">Hélène is a certified PCM trainer and practitioner, which means she has the accreditation to not only use the model in coaching but also to teach it.</p>

        <h2 data-i18n="resources.pcmMethod.s2.title">The core idea: six personality types, six languages</h2>
        <p data-i18n="resources.pcmMethod.s2.p1">PCM identifies six fundamental personality types, each with its own way of perceiving the world, its own motivators, its own preferred communication style, and its own characteristic reactions under stress. We all have all six in us, but we each have a <strong>base</strong> type and a distinct ordering of the others — our personal "personality floors," PCM calls them.</p>
        <p data-i18n="resources.pcmMethod.s2.p2">The practical takeaway is simple and powerful: <strong>we don't all speak the same emotional language.</strong> The way one person feels cared for is not the way another person feels cared for. The way one person processes a hard decision is not the way another one does. When we forget that, we interpret our partner's or colleague's natural style as indifference or incompetence — and the relationship pays the price.</p>

        <h2 data-i18n="resources.pcmMethod.s3.title">What PCM makes visible</h2>
        <p data-i18n="resources.pcmMethod.s3.intro">Four things that most couples and teams can't see without a framework like PCM:</p>
        <ul style="padding-left:1.2rem; margin:1rem 0;">
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.pcmMethod.s3.l1"><strong>What motivates each person.</strong> Recognition of work, quality time, principles being honored, play, structure, solitude — different people need different things to feel energized. PCM names them specifically.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.pcmMethod.s3.l2"><strong>Preferred communication channel.</strong> Each type has a natural channel (informative, directive, nurturing, emotive, playful). Miscommunication often means the message was right but the channel was wrong.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.pcmMethod.s3.l3"><strong>Distress sequences.</strong> Each type has characteristic behavior under stress — the "miscommunication signatures" that show up when needs aren't met. PCM lets you recognize them in yourself and others, early.</li>
          <li style="margin-bottom:0.8rem;" data-i18n-html="resources.pcmMethod.s3.l4"><strong>How to reconnect.</strong> The model is prescriptive: if you know which type someone is in, you know how to re-engage them. It's a set of practical moves, not just theory.</li>
        </ul>

        <h2 data-i18n="resources.pcmMethod.s4.title">How PCM shows up in our coaching work</h2>
        <p data-i18n="resources.pcmMethod.s4.p1">For couples, PCM often shows up in the middle of a sentence: "wait, when you said <em>that</em>, I heard criticism, but you were actually trying to help me with structure — and that's because you're primarily a Thinker and I'm primarily a Harmonizer." A small insight. A whole pattern suddenly visible.</p>
        <p data-i18n="resources.pcmMethod.s4.p2">For teams, PCM helps leadership teams understand why their meetings feel off — and gives them specific tools to adjust how they communicate with each other. It's a conversation that starts with personality and ends with real changes in how the team works.</p>
        <p data-i18n="resources.pcmMethod.s4.p3">In either case, PCM doesn't replace systemic coaching — it complements it. ORSC tells us what the system needs. PCM gives us a language to communicate about it.</p>

        <h2 data-i18n="resources.pcmMethod.s5.title">Is PCM right for you?</h2>
        <p data-i18n="resources.pcmMethod.s5.p1">PCM is especially useful when the challenge you're working on is about <em>how</em> you communicate more than <em>what</em> you're communicating about. If the content of your conversations keeps being derailed by the form, if you find yourself saying "that's not what I meant" more often than you'd like, or if you want a common vocabulary with your partner or team to talk about differences — PCM will serve you well.</p>

      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="contact">
    <div class="container">
      <h2 data-i18n="resources.pcmMethod.cta.title">Want to see your own PCM profile?</h2>
      <p data-i18n="resources.pcmMethod.cta.subtitle">PCM assessments and training can be part of your coaching journey. Book a free call with Hélène to talk about it.</p>
      <a href="/contact?source=resources-pcm-method" class="btn btn-primary" data-i18n="resources.pcmMethod.cta.button">Book a free call</a>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
