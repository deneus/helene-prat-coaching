<?php

declare(strict_types=1);

namespace HeleneCoaching\FrontEnd\Pages;

use HeleneCoaching\EnvironmentConfiguration;
use HeleneCoaching\FrontEnd\Header;
use HeleneCoaching\FrontEnd\Footer;

final class Contact
{
    public static function render(): string
    {
        $turnstileSiteKey = htmlspecialchars(EnvironmentConfiguration::get('TURNSTILE_SITE_KEY'));

        $header = Header::render(
            title: 'Contact — Book a Free Call | theweknows',
            titleI18nKey: 'contact.meta.title',
            description: 'Book a free 30-minute call with theweknows. Systemic coaching for couples, teams and business partnerships, by certified ORSC coach Hélène Prat. No commitment.',
            descriptionI18nKey: 'contact.meta.description',
            extraHeadHtml: ['  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>'],
        );

        $footer = Footer::render();

        $body = <<<HTML
  <!-- ===== HERO ===== -->
  <section class="hero" style="padding: 120px 0 40px;">
    <div class="container">
      <h1 data-i18n="contactPage.hero.title">Let's talk</h1>
      <p class="subtitle" data-i18n="contactPage.hero.subtitle">Book a free 30-minute call. No pressure, no commitment — just a real conversation to see what's possible.</p>
    </div>
  </section>

  <!-- ===== CONTACT / MULTI-STEP FORM ===== -->
  <section class="contact" id="contact">
    <div class="container">
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
            <span data-i18n="chemistry.step3">You get a free 30-minute call — no commitment, no pressure.</span>
          </li>
        </ul>
        <p class="chemistry-card-note" data-i18n="chemistry.note">💛 This call is simply a conversation to see if working together feels right.</p>
      </div>

      <!-- Multi-step form -->
      <div class="msf" id="multi-step-form">
        <div class="msf-progress">
          <div class="msf-progress-bar" id="msf-progress-bar"></div>
        </div>
        <div class="msf-step-indicator">
          <span data-i18n="form.step">Step</span> <span id="msf-current">1</span> <span data-i18n="form.of">of</span> <span id="msf-total">4</span>
        </div>

        <form id="contact-form" novalidate>
          <!-- Hidden source tracking -->
          <input type="hidden" name="source" id="field-source" value="">

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
            <div class="cf-turnstile" data-sitekey="{$turnstileSiteKey}" data-theme="light" data-size="normal"></div>
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
HTML;

        return $header . $body . $footer;
    }
}
