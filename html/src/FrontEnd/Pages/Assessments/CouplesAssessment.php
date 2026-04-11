<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages\Assessments;

use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class CouplesAssessment
{
    public static function render(): string
    {
        $jsPath = __DIR__ . '/../../../../js/assessment-couples.js';
        $jsVersion = file_exists($jsPath) ? (string) filemtime($jsPath) : '1';

        $header = Header::render(
            title: 'Is Your Couple in Transition? — Free Self-Assessment | theweknows',
            titleI18nKey: 'assessments.couples.meta.title',
            description: 'A free 2-minute self-assessment for couples in transition — especially after a relocation. Get a gentle diagnostic and see what systemic coaching could help you work on.',
            descriptionI18nKey: 'assessments.couples.meta.description',
            extraHeadHtml: ["  <script src=\"/js/assessment-couples.js?v={$jsVersion}\" defer></script>"],
        );

        $footer = Footer::render();

        $body = <<<'HTML'
  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="assessments.couples.hero.title">Is your couple in transition?</h1>
      <p class="subtitle" data-i18n="assessments.couples.hero.subtitle">A free 2-minute self-assessment, especially designed for couples navigating relocation or other big life transitions. No email required — just honest questions and a gentle read on where your "us" is right now.</p>
    </div>
  </section>

  <!-- ===== QUIZ ===== -->
  <section class="about">
    <div class="container">
      <div id="couples-quiz" style="max-width:720px; margin:0 auto;">

        <!-- Intro -->
        <div id="quiz-intro" class="quiz-panel" style="background:var(--color-bg-alt); padding:2.5rem; border-radius:16px; text-align:center;">
          <h2 data-i18n="assessments.couples.intro.title">Before you start</h2>
          <p data-i18n="assessments.couples.intro.p1">8 short questions. Answer them as honestly as you can — <em>as the person you are today</em>, not the person you wish you were. There are no right or wrong answers. The point isn't to score well; it's to see yourselves clearly.</p>
          <p style="margin:1rem 0 2rem;" data-i18n="assessments.couples.intro.p2">We recommend doing this together, but you can also do it alone — it's still useful.</p>
          <button type="button" class="btn btn-primary" id="quiz-start" data-i18n="assessments.couples.intro.cta">Start the assessment</button>
        </div>

        <!-- Questions -->
        <div id="quiz-questions" class="quiz-panel" style="display:none; background:var(--color-bg-alt); padding:2.5rem; border-radius:16px;">
          <div class="msf-progress" style="margin-bottom:1rem;">
            <div class="msf-progress-bar" id="quiz-progress-bar"></div>
          </div>
          <div class="msf-step-indicator" style="margin-bottom:1.5rem;">
            <span data-i18n="form.step">Question</span> <span id="quiz-current">1</span> <span data-i18n="form.of">of</span> <span id="quiz-total">8</span>
          </div>
          <h3 id="quiz-question-text" style="margin-bottom:1.5rem;"></h3>
          <div id="quiz-answers" style="display:flex; flex-direction:column; gap:0.8rem;"></div>
          <div style="margin-top:2rem; display:flex; justify-content:space-between;">
            <button type="button" class="btn btn-outline" id="quiz-prev" data-i18n="form.prev">Previous</button>
            <button type="button" class="btn btn-primary" id="quiz-next" data-i18n="form.next" disabled>Next</button>
          </div>
        </div>

        <!-- Result -->
        <div id="quiz-result" class="quiz-panel" style="display:none; background:var(--color-bg-alt); padding:2.5rem; border-radius:16px; text-align:center;">
          <h2 id="quiz-result-title"></h2>
          <p id="quiz-result-body" style="margin:1.5rem 0; font-size:1.05rem;"></p>
          <p id="quiz-result-guidance" style="margin-bottom:2rem; color:var(--color-text-light);"></p>
          <a href="/contact?source=couples-assessment" class="btn btn-primary" data-i18n="assessments.couples.result.cta">Book a free chemistry call</a>
          <p style="margin-top:1.5rem; font-size:0.85rem; color:var(--color-text-light);">
            <button type="button" id="quiz-restart" style="background:none; border:none; color:var(--color-primary); cursor:pointer; text-decoration:underline; font-family:inherit; font-size:inherit;" data-i18n="assessments.couples.result.restart">Retake the assessment</button>
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== WHAT NEXT ===== -->
  <section class="gains">
    <div class="container">
      <h2 data-i18n="assessments.couples.next.title">After the assessment, what?</h2>
      <div class="gains-list">
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="assessments.couples.next.l1">Nothing, if that's what you prefer — the self-awareness you get from 8 honest questions is already a win.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="assessments.couples.next.l2">Or: book a free 30-minute chemistry call with Hélène. Tell her what the assessment surfaced. See where the conversation goes.</span>
        </div>
        <div class="gain-item">
          <div class="gain-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span data-i18n="assessments.couples.next.l3">If the result nudged you toward therapy rather than coaching, that's also a useful signal — and we'll gladly point you in that direction.</span>
        </div>
      </div>
    </div>
  </section>
HTML;

        return $header . $body . $footer;
    }
}
