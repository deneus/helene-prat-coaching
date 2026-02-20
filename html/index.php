<?php
declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

use HeleneCoaching\EnvironmentConfiguration;
use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

$turnstileSiteKey = htmlspecialchars(EnvironmentConfiguration::get('TURNSTILE_SITE_KEY'));

echo Header::render(
    title: 'Hélène Prat — Coaching for Couples &amp; Teams in Transition',
    titleI18nKey: 'meta.title',
    description: 'Certified ORSC Coach and PCM Trainer helping couples and teams thrive through relocation and transition. Based in Hilversum, Netherlands.',
    descriptionI18nKey: 'meta.description',
    extraHeadHtml: ['  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>'],
);
?>

  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="container">
      <h1 data-i18n="hero.title">Helping couples and teams thrive through transition</h1>
      <p class="subtitle" data-i18n="hero.subtitle">Certified ORSC Coach &amp; Process Communication (PCM) Practicioner</p>
      <a href="#contact" class="btn btn-primary" data-i18n="hero.cta">Book a Free Call</a>
      <p class="hero-hook" data-i18n="hero.hook">Have you ever felt like you and your partner are living the same move, yet experiencing two completely different realities? One of you thrives on the adventure, while the other quietly mourns what was left behind. The gap isn't geography — it's what happens when big transitions go unspoken.</p>

      <div class="hero-audience">
        <div class="hero-audience-card">
          <h3 data-i18n="hero.audience.couples.title">Couples</h3>
          <p data-i18n="hero.audience.couples.desc">Navigating relocation together while staying emotionally connected.</p>
        </div>
        <div class="hero-audience-card">
          <h3 data-i18n="hero.audience.partnership.title">Partnerships</h3>
          <p data-i18n="hero.audience.partnership.desc">Rebuilding shared vision when life pulls you in different directions.</p>
        </div>
        <div class="hero-audience-card">
          <h3 data-i18n="hero.audience.teams.title">Teams</h3>
          <p data-i18n="hero.audience.teams.desc">Leading through change without losing the people around you.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== ABOUT ===== -->
  <section class="about" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-photo">
          <img src="images/portrait-placeholder.svg" alt="Hélène Prat">
        </div>
        <div class="about-content">
          <h2 data-i18n="about.title">Meet Hélène</h2>
          <p data-i18n="about.p1">Hélène Prat is an international HR leader with nearly 20 years of experience partnering with business teams. She studied Organizational &amp; Social Psychology, where her fascination with group dynamics and the undercurrents that shape behavior first began.</p>
          <p data-i18n="about.p2">Over a decade ago, while developing a leadership program, she discovered Process Communication (PCM), a powerful methodology that helps individuals build awareness of their personality, motivators, and distress patterns. As a certified trainer and practitioner, she has helped individuals, couples and teams strengthen their communication effectiveness.</p>
          <p data-i18n="about.p3">In 2023, Hélène encountered systemic coaching through the ORSC® methodology — a moment when everything fell into place. She realized she could no longer overlook the transformative power of systems, whether teams, partnerships, or couples.</p>
          <p data-i18n="about.p4">Originally from France, Hélène moved to Dublin in 2008, returned to France in 2009, relocated to Sydney with her life partner in 2015, and in 2022 moved back to Europe with their son. Her family has now settled in Hilversum, in the Netherlands.</p>
          <p data-i18n="about.p5">Her approach blends systemic coaching, effective communication tools, and energy healing practices, supporting her clients in feeling grounded and integrating new insights at their own pace. She is generous, full of life, and brings humor and positivity to everything she does.</p>
        </div>
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

  <!-- ===== CONTACT / MULTI-STEP FORM ===== -->
  <section class="contact" id="contact">
    <div class="container">
      <h2 data-i18n="contact.title">Curious if this is right for you?</h2>
      <p data-i18n="contact.subtitle">Book a free 30-minute chemistry call to explore your situation and see how we can work together.</p>

      <!-- Chemistry call intro card -->
      <div class="chemistry-card">
        <div class="chemistry-card-header">
          <span class="chemistry-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.78a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </span>
          <h3 data-i18n="chemistry.title">What happens next?</h3>
        </div>
        <ul class="chemistry-card-steps">
          <li>
            <span class="chemistry-step-num">1</span>
            <span data-i18n="chemistry.step1">You fill in this short form — it takes less than 2 minutes.</span>
          </li>
          <li>
            <span class="chemistry-step-num">2</span>
            <span data-i18n="chemistry.step2">Hélène reviews your situation and reaches out to schedule a call.</span>
          </li>
          <li>
            <span class="chemistry-step-num">3</span>
            <span data-i18n="chemistry.step3">You get a free 30-minute chemistry call — no commitment, no pressure.</span>
          </li>
        </ul>
        <p class="chemistry-card-note" data-i18n="chemistry.note">💛 This call is simply a conversation to see if working together feels right.</p>
      </div>

      <!-- Multi-step form -->
      <div class="msf" id="multi-step-form">
        <!-- Progress bar -->
        <div class="msf-progress">
          <div class="msf-progress-bar" id="msf-progress-bar"></div>
        </div>
        <div class="msf-step-indicator">
          <span data-i18n="form.step">Step</span> <span id="msf-current">1</span> <span data-i18n="form.of">of</span> <span id="msf-total">4</span>
        </div>

        <form id="contact-form" novalidate>
          <!-- Step 1: Name -->
          <div class="msf-step active" data-step="1">
            <label for="field-name" data-i18n="form.name.label">What is your name?</label>
            <input type="text" id="field-name" name="name" required data-i18n-placeholder="form.name.placeholder" placeholder="Your full name">
            <span class="msf-error" id="error-name"></span>
          </div>

          <!-- Step 2: Email -->
          <div class="msf-step" data-step="2">
            <label for="field-email" data-i18n="form.email.label">What is your email address?</label>
            <input type="email" id="field-email" name="email" required data-i18n-placeholder="form.email.placeholder" placeholder="your@email.com">
            <span class="msf-error" id="error-email"></span>
          </div>

          <!-- Step 3: Country + City -->
          <div class="msf-step" data-step="3">
            <label for="field-country" data-i18n="form.country.label">Country</label>
            <select id="field-country" name="country" required>
              <option value="" data-i18n="form.country.placeholder">Select your country</option>
              <option>Afghanistan</option><option>Albania</option><option>Algeria</option><option>Andorra</option><option>Angola</option><option>Antigua and Barbuda</option><option>Argentina</option><option>Armenia</option><option>Australia</option><option>Austria</option><option>Azerbaijan</option>
              <option>Bahamas</option><option>Bahrain</option><option>Bangladesh</option><option>Barbados</option><option>Belarus</option><option>Belgium</option><option>Belize</option><option>Benin</option><option>Bhutan</option><option>Bolivia</option><option>Bosnia and Herzegovina</option><option>Botswana</option><option>Brazil</option><option>Brunei</option><option>Bulgaria</option><option>Burkina Faso</option><option>Burundi</option>
              <option>Cabo Verde</option><option>Cambodia</option><option>Cameroon</option><option>Canada</option><option>Central African Republic</option><option>Chad</option><option>Chile</option><option>China</option><option>Colombia</option><option>Comoros</option><option>Congo (Brazzaville)</option><option>Congo (Kinshasa)</option><option>Costa Rica</option><option>Croatia</option><option>Cuba</option><option>Cyprus</option><option>Czech Republic</option>
              <option>Denmark</option><option>Djibouti</option><option>Dominica</option><option>Dominican Republic</option>
              <option>Ecuador</option><option>Egypt</option><option>El Salvador</option><option>Equatorial Guinea</option><option>Eritrea</option><option>Estonia</option><option>Eswatini</option><option>Ethiopia</option>
              <option>Fiji</option><option>Finland</option><option>France</option>
              <option>Gabon</option><option>Gambia</option><option>Georgia</option><option>Germany</option><option>Ghana</option><option>Greece</option><option>Grenada</option><option>Guatemala</option><option>Guinea</option><option>Guinea-Bissau</option><option>Guyana</option>
              <option>Haiti</option><option>Honduras</option><option>Hungary</option>
              <option>Iceland</option><option>India</option><option>Indonesia</option><option>Iran</option><option>Iraq</option><option>Ireland</option><option>Israel</option><option>Italy</option>
              <option>Jamaica</option><option>Japan</option><option>Jordan</option>
              <option>Kazakhstan</option><option>Kenya</option><option>Kiribati</option><option>Kuwait</option><option>Kyrgyzstan</option>
              <option>Laos</option><option>Latvia</option><option>Lebanon</option><option>Lesotho</option><option>Liberia</option><option>Libya</option><option>Liechtenstein</option><option>Lithuania</option><option>Luxembourg</option>
              <option>Madagascar</option><option>Malawi</option><option>Malaysia</option><option>Maldives</option><option>Mali</option><option>Malta</option><option>Marshall Islands</option><option>Mauritania</option><option>Mauritius</option><option>Mexico</option><option>Micronesia</option><option>Moldova</option><option>Monaco</option><option>Mongolia</option><option>Montenegro</option><option>Morocco</option><option>Mozambique</option><option>Myanmar</option>
              <option>Namibia</option><option>Nauru</option><option>Nepal</option><option>Netherlands</option><option>New Zealand</option><option>Nicaragua</option><option>Niger</option><option>Nigeria</option><option>North Korea</option><option>North Macedonia</option><option>Norway</option>
              <option>Oman</option>
              <option>Pakistan</option><option>Palau</option><option>Palestine</option><option>Panama</option><option>Papua New Guinea</option><option>Paraguay</option><option>Peru</option><option>Philippines</option><option>Poland</option><option>Portugal</option>
              <option>Qatar</option>
              <option>Romania</option><option>Russia</option><option>Rwanda</option>
              <option>Saint Kitts and Nevis</option><option>Saint Lucia</option><option>Saint Vincent and the Grenadines</option><option>Samoa</option><option>San Marino</option><option>São Tomé and Príncipe</option><option>Saudi Arabia</option><option>Senegal</option><option>Serbia</option><option>Seychelles</option><option>Sierra Leone</option><option>Singapore</option><option>Slovakia</option><option>Slovenia</option><option>Solomon Islands</option><option>Somalia</option><option>South Africa</option><option>South Korea</option><option>South Sudan</option><option>Spain</option><option>Sri Lanka</option><option>Sudan</option><option>Suriname</option><option>Sweden</option><option>Switzerland</option><option>Syria</option>
              <option>Taiwan</option><option>Tajikistan</option><option>Tanzania</option><option>Thailand</option><option>Timor-Leste</option><option>Togo</option><option>Tonga</option><option>Trinidad and Tobago</option><option>Tunisia</option><option>Turkey</option><option>Turkmenistan</option><option>Tuvalu</option>
              <option>Uganda</option><option>Ukraine</option><option>United Arab Emirates</option><option>United Kingdom</option><option>United States</option><option>Uruguay</option><option>Uzbekistan</option>
              <option>Vanuatu</option><option>Vatican City</option><option>Venezuela</option><option>Vietnam</option>
              <option>Yemen</option>
              <option>Zambia</option><option>Zimbabwe</option>
            </select>
            <span class="msf-error" id="error-country"></span>
            <label for="field-city" data-i18n="form.city.label">City</label>
            <input type="text" id="field-city" name="city" data-i18n-placeholder="form.city.placeholder" placeholder="Your city">
            <span class="msf-error" id="error-city"></span>
          </div>

          <!-- Step 4: About + Availability -->
          <div class="msf-step" data-step="4">
            <label for="field-about" data-i18n="form.about.label">Tell us about you</label>
            <textarea id="field-about" name="about" rows="3" data-i18n-placeholder="form.about.placeholder" placeholder="A few words about you and your situation"></textarea>
            <span class="msf-error" id="error-about"></span>
            <label for="field-availability" data-i18n="form.availability.label">Your availability (please mention your timezone)</label>
            <textarea id="field-availability" name="availability" rows="2" data-i18n-placeholder="form.availability.placeholder" placeholder="e.g. Weekday mornings CET, weekends flexible"></textarea>
            <span class="msf-error" id="error-availability"></span>
            <label class="msf-checkbox">
              <input type="checkbox" id="field-consent" name="consent" required>
              <span data-i18n="form.consent">I agree that my data will be used to process my request.</span>
            </label>
            <span class="msf-error" id="error-consent"></span>
            <div class="cf-turnstile" data-sitekey="<?= $turnstileSiteKey ?>" data-theme="light" data-size="normal"></div>
          </div>

          <!-- Navigation buttons -->
          <div class="msf-nav">
            <button type="button" class="btn btn-outline msf-prev" id="msf-prev" data-i18n="form.prev">Previous</button>
            <button type="button" class="btn btn-primary msf-next" id="msf-next" data-i18n="form.next">Next</button>
            <button type="submit" class="btn btn-primary msf-submit" id="msf-submit" data-i18n="form.submit">Send Message</button>
          </div>
        </form>

        <!-- Success message -->
        <div class="msf-success" id="msf-success">
          <div class="msf-success-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <h3 data-i18n="form.success.title">Message sent!</h3>
          <p data-i18n="form.success.text">Thank you for reaching out. Hélène will get back to you shortly.</p>
        </div>
      </div>

    </div>
  </section>

<?= Footer::render() ?>
