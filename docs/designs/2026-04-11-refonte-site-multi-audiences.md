# Refonte site theweknows — Multi-audiences

**Brand** : theweknows (domain `theweknows.com`, acquis 2026-04-11) — coaching practice fondée par Hélène Prat
**Date** : 2026-04-11
**Status** : Design approuvé, implémentation en cours
**Brainstorm** : @conversion-copywriter · @growth-hacker · @content-creator · @seo-specialist · @frontend-developer · Avocat du Diable

---

## 1. Contexte & objectifs

### Site actuel
- Mono-page PHP `index.php` focalisée 100% sur le programme "Rooted Together" (couples expats relocation).
- Stack : PHP natif, i18n EN/FR (système `data-i18n`), formulaire multi-step, Turnstile captcha, déployé sur Vercel.
- Sections : Hero · About · Program (6 sessions) · For You · Gains · Contact.

### Objectifs business
1. **Priorité #1 — Volume de chemistry calls / free consultations** (C)
2. Élargir l'audience au-delà des couples expats (Couples génériques, Teams, Partnerships) (A)
3. Mieux qualifier les leads entrants (B)
4. Positionner Hélène comme experte systémique ORSC/PCM au-delà du use-case relocation (D)
5. **Démystifier le coaching vs la thérapie**, ton orienté *personal / professional growth*, "invest in yourself and your team" (E)

### Contraintes
- Langues : **EN + FR** (pas de NL)
- Prix : **sur demande** (affichage structure seulement : X sessions × Y min × Z mois)
- Testimonials : à collecter, **3 placeholders au launch**
- Couleurs des sections actuelles : **conservées** (design tokens CSS)
- Tech : **PHP natif** (pas de migration framework), Vercel compatible

---

## 2. Architecture de contenu (URLs)

```
/                                        Home segmentée — 3 cartes audiences + meet teaser + CTA
/couples                                 Hub couples — section A/1 (general transitions) + teaser A/2
/couples/relocation                      Landing niche relocation — SEO niche, deep content standalone
/teams                                   Landing B2B teams
/partnerships                            Landing B2B partnerships
/about                                   Meet Hélène — pilier de trust
/testimonials                            Page témoignages (3 placeholders au launch)
/contact                                 Formulaire multi-step (existant)
/resources/coaching-vs-therapy           Démystification longue
/resources/what-is-systemic-coaching     Explainer fondateur
/resources/orsc-method                   Présentation ORSC
/resources/pcm-method                    Présentation PCM
/resources/faq                           FAQ globale (schema FAQPage)
/couples/assessment                      Self-assessment interactif v1 (Couples Relocation uniquement)
```

**Note** : `/couples` et `/couples/relocation` sont deux pages distinctes avec contenus génuinement différents (pas de canonical croisé). La tab "Relocation" dans `/couples` est une version courte avec lien "Read the full relocation program →" vers `/couples/relocation`.

---

## 3. Structure type d'une landing d'audience

Gabarit normalisé appliqué à Couples, Teams, Partnerships :

1. **Hero** — Voice of customer (pas "nous aidons à" mais les mots exacts du client) + promesse + CTA primaire
2. **Le besoin** — Framework PAS (Problem-Agitate-Solution), miroir des douleurs
3. **Pourquoi être coaché** — Bénéfices concrets et tangibles du coaching systémique
4. **Mini-bloc "Coaching ≠ thérapie"** — 3 lignes max, confiant, avec lien vers `/resources/coaching-vs-therapy`
5. **Détails de l'offre** — Structure concrète : X sessions × Y min × Z mois + format (online / in-person) + pas de prix
6. **"Why talk to Hélène"** — 3 bullets de credibilité adaptés à l'audience
7. **"What it can sound like"** — Scénarios réalistes (avant que les testimonials soient collectés)
8. **CTA final**
   - Couples → **"Book a chemistry call"**
   - Teams / Partnerships → **"Book a free consultation"**
   - Les deux pointent vers le même formulaire de contact avec un champ `source` tracké

---

## 4. Déclinaison par audience

### A. Couples

#### A/1 — General transitions (dans /couples)
**Besoins cibles** :
- "Things are not the way they used to — how do we get back to the vibe we had in our early days?"
- Événements de vie : mariage, achat immobilier, arrivée d'un enfant
- Couple solide qui veut passer au niveau supérieur

**Copy angle** : intime, émotionnel, "us vs the world"

#### A/2 — Relocation specific (/couples/relocation)
**Besoins cibles** :
- New chapter : mix de hopes, dreams, grief, déséquilibres dans la relation
- "How do we build together our new normal and root ourselves in our new life?"

**Copy angle** : reprend et étend le programme "Rooted Together" existant (6 sessions déjà décrites dans `index.php`). C'est l'actif le plus fort du site actuel — **niche hyper-différenciante** d'Hélène (son propre vécu Dublin → France → Sydney → NL).

**CTA** : "Book a chemistry call"

### B. Teams

**Besoins cibles** :
- High-performing / high-trust teams
- Psychological safety
- Team resilience / adaptation to change

**Copy angle** : aspirationnel, orienté leader, avec data légère (réf. Google Aristotle sur psy safety) pour crédibiliser

**"Why Hélène" bullets** : 20 years HR international · ORSC certified systemic coach · PCM trainer · has built teams, not just coached them

**CTA** : "Book a free consultation"

### C. Partnerships

**Besoins cibles** :
- Forming a new business partnership (setting you for success)
- Taking your business to the next level
- Managing transition / things don't work as they used to

**Copy angle** : stratégique, voix founder-to-founder, métaphore du co-pilote

**"Why Hélène" bullets** : ORSC systemic lens · 20 years corporate experience · understands founder dynamics

**CTA** : "Book a free consultation"

---

## 5. Pages support

### D. /about — Meet Hélène (pilier de trust #1)

Structure en 4 blocs :

1. **Son histoire** — Dublin 2008 → France 2009 → Sydney 2015 → NL 2022 → Hilversum (preuve vécue, critique pour Couples relocation)
2. **Ses méthodes** — ORSC (systemic coaching), PCM (Process Communication), energy healing practices
3. **Sa philosophie** — coaching ≠ thérapie, personal/professional growth, systemic lens
4. **Ses credentials** — Certified ORSC coach, PCM trainer, 20 years HR corporate, MA Organizational & Social Psychology

**Narrative unificatrice** : *"Transitions reveal the systems we live in."*

### E. /testimonials — 3 placeholders au launch

Cadre : "Featured soon — first wave of testimonials being collected."

**Placeholder 1 — Couple relocation**
> *"After our move from France to the Netherlands, we felt like we were living in two different worlds. In 6 sessions with Hélène, we rebuilt our compass together — not by going back to who we were, but by choosing who we wanted to become here."*
> — **Marie & Jean**, Paris → Amsterdam (placeholder, full quote coming soon)

**Placeholder 2 — Team**
> *"Hélène helped our leadership team name the unspoken — the tensions we'd been dancing around for months. We came out with clarity, and more importantly, with trust. It reshaped how we work together."*
> — **Head of Product**, Tech scale-up, NL (placeholder, full quote coming soon)

**Placeholder 3 — Partnership**
> *"We'd been business partners for 4 years and thought we were aligned. Hélène's systemic approach showed us the drift we hadn't seen. The conversations we had with her were the ones we'd been avoiding — and they saved the partnership."*
> — **Co-founders**, Consulting firm, EU (placeholder, full quote coming soon)

Chaque placeholder est **clairement étiqueté** "placeholder / coming soon" — pas de faux témoignage.

### F. /contact
Formulaire multi-step existant conservé tel quel, avec ajout d'un **champ caché `source`** qui capture la page d'origine et le CTA cliqué, pour qu'Hélène connaisse le contexte de chaque lead.

---

## 6. Resources (5 pages evergreen)

Chacune **800-1200 mots minimum** (thin content pénalisant pour le SEO sinon).

1. **`/resources/coaching-vs-therapy`** — LA réponse longue et claire à la question "en quoi c'est différent ?". Liée depuis chaque audience page. FAQ schema.
2. **`/resources/what-is-systemic-coaching`** — Explainer fondateur de l'approche ORSC.
3. **`/resources/orsc-method`** — Présentation de la méthodologie ORSC.
4. **`/resources/pcm-method`** — Présentation de Process Communication Model.
5. **`/resources/faq`** — FAQ globale (schema FAQPage → rich snippets Google).

---

## 7. Self-Assessment v1

**`/couples/assessment`** — *"Is your relationship in transition?"*

- 8-10 questions rapides, interactif côté client
- Résultat = diagnostic doux ("Your couple seems to be at stage X — here's what to work on") + CTA "Talk to Hélène"
- Capture email **optionnelle** à la fin ("Want your result in your inbox?")
- Pas de PDF, pas de gated content — feedback immédiat sur la page
- GDPR : consent explicite si capture email

**Note** : on lance **seulement le self-assessment Couples Relocation en v1**. Les versions Teams / Partnerships viendront si les métriques du v1 le justifient.

---

## 8. Funnel & growth

### CTAs
- **Primaire unique par audience** → formulaire de contact
  - Couples : *"Book a chemistry call"*
  - Teams / Partnerships : *"Book a free consultation"*
- **Secondaire (Couples uniquement)** → *"Take the 2-minute assessment"* vers `/couples/assessment`

### Tracking (Matomo — déjà dans TODO)
Events funnel :
- `page_view` (par URL)
- `hero_cta_click`
- `assessment_start`, `assessment_complete`, `assessment_email_captured`
- `form_step_1` → `form_step_4` → `form_submit`
- `chemistry_booked` / `consultation_booked`
- Le formulaire doit injecter `source_page` et `source_cta` dans l'email envoyé à Hélène.

### Paid ads
- 3 campagnes Google Ads séparées (Couples / Teams / Partnerships), chacune pointant sur sa landing audience
- Budget test : 500-800 €/mois pour valider le canal
- Coexistence avec SEO (qui prend 3-6 mois à délivrer)

### A/B testing post-launch
- Variantes du hero par audience (émotionnel vs pragmatique)
- Review semaine 2 + semaine 4 basé sur les funnel events

---

## 9. SEO

### Clusters de keywords par audience

**Couples A/1** (page `/couples`) :
- `couples coaching`, `relationship coaching`, `coaching avant mariage`, `coach de couple` (FR)

**Couples A/2** (page `/couples/relocation`) :
- `expat couples coaching`, `relocation relationship stress`, `trailing spouse coaching`, `coach couple expatrié` (FR) — **niche très peu concurrentielle**

**Teams** (page `/teams`) :
- `team coaching`, `psychological safety`, `systemic team coaching`, `ORSC coach`

**Partnerships** (page `/partnerships`) :
- `business partner coaching`, `co-founder coaching`, `co-founder alignment`

**Resources** :
- `what is systemic coaching`, `coaching vs therapy`, `ORSC method`, `PCM model`

### Technique SEO
- Meta title (≤60 chars) + description (≤155 chars) par page, EN + FR
- **Hreflang EN/FR** sur toutes les pages
- **Canonical** par page (pas de duplicate entre `/couples` et `/couples/relocation` car contenus distincts)
- `sitemap.xml` avec toutes les URLs
- `robots.txt` propre
- OpenGraph + Twitter Card meta par page

### Schema.org
- Toutes pages : `Person` (Hélène)
- Audience pages : `Service` avec `areaServed`, `provider`
- `/resources/coaching-vs-therapy` + `/resources/faq` : `FAQPage`
- `/about` : `Person` détaillé avec `hasCredential`, `alumniOf`

### Local SEO
- **Google Business Profile** : Hilversum + service "online" — quick win 1 h de setup
- Mentions : Hilversum, Amsterdam, Netherlands, Europe, online (expat audience international)

---

## 10. Architecture technique

### Structure fichiers
```
html/
  index.php                          → Router (dispatch sur URI via vercel.json rewrites)
  vercel.json                        → Rewrites pour toutes les routes
  src/
    FrontEnd/
      Header.php                     (existant, étendu avec nav sticky)
      Footer.php                     (existant)
      Router.php                     (nouveau — dispatcher minimal)
      Pages/
        Home.php
        CouplesHub.php               (A/1 + teaser A/2)
        CouplesRelocation.php        (standalone, full content)
        Teams.php
        Partnerships.php
        About.php
        Testimonials.php
        Contact.php
        Resources/
          CoachingVsTherapy.php
          WhatIsSystemicCoaching.php
          OrscMethod.php
          PcmMethod.php
          Faq.php
        Assessments/
          CouplesAssessment.php
      Partials/
        Hero.php
        AudienceSection.php          (besoin → avantages → offre)
        CtaBlock.php
        WhyHeleneBlock.php
        CoachingVsTherapyMini.php
        ContactForm.php              (factorisation du multi-step existant)
        TestimonialCard.php
  js/
    main.js                          (existant — nav, i18n, form)
    assessment-couples.js            (nouveau — quiz logic)
  css/
    (design tokens dans :root, couleurs de sections conservées)
  i18n/
    en.json                          (étendu par page)
    fr.json                          (étendu par page)
```

### Routing
- **Vercel** : `vercel.json` avec rewrites mappant toutes les URLs vers `index.php` + query param
- **Local (Apache)** : `.htaccess` fallback avec les mêmes rewrites
- **`index.php`** : dispatcher minimal qui lit l'URI, instancie la page correspondante via `src/FrontEnd/Router.php`, et renvoie le rendu

### Design tokens
- Extraction des couleurs actuelles dans `:root` : `--color-couples`, `--color-teams`, `--color-partnerships`, `--color-about`, `--color-accent`, etc.
- Composant `AudienceSection.php` applique la bonne couleur via data-attribute

### i18n
- Système `data-i18n` existant étendu
- Clés namespacées par page : `couples.hero.title`, `teams.need.title`, etc.
- JSON chargé côté client (déjà en place dans `main.js`)

### Performance
- Preload fonts critiques, inline critical CSS
- Lazy-load images below-fold
- JS splits : `main.js` (global) + `form.js` + `assessment-couples.js`

---

## 11. GDPR & légal

- **Privacy policy étendue** (`privacy.php`) pour couvrir :
  - Tracking Matomo (consent)
  - Self-assessment email capture
  - Contact form data processing
  - Droit à l'oubli, purpose limitation
- **Consent banner** : Matomo + consent explicite pour analytics
- Turnstile déjà en place pour anti-spam

---

## 12. Scope & timeline honnête

### Ce qui est dans le scope du launch
- 8 pages principales (Home, Couples, Couples/Relocation, Teams, Partnerships, About, Testimonials, Contact)
- 5 resource pages (800-1200 mots chacune, EN + FR)
- 1 self-assessment interactif (Couples Relocation v1)
- Routing PHP + composants réutilisables
- Tracking Matomo + GDPR
- Schema, hreflang, sitemap, meta par page
- GMB setup
- 3 testimonial placeholders clairement étiquetés

### Volume copy
- ~15 URLs uniques × 2 langues (EN + FR) × structure normalisée = **~50-60 blocs de copy à rédiger et traduire**
- Resources = ~8000-12000 mots EN + traduction FR

### Timeline estimée
- **Dev structure (router, composants, nav, design tokens)** : 3-5 jours
- **Intégration pages audiences + about + testimonials + contact** : 4-6 jours
- **Resources pages** : 2-3 jours (intégration ; la copy elle-même doit être fournie)
- **Self-assessment Couples** : 2-3 jours
- **SEO technique (schema, meta, hreflang, sitemap)** : 1-2 jours
- **Tracking + GDPR** : 1-2 jours
- **QA EN/FR multi-device** : 2 jours
- **Copywriting EN + traduction FR** : hors dev, 2-4 semaines en parallèle/séquentiel selon ressources

**Total dev** : ~15-23 jours. **Total projet avec copy** : **8-12 semaines**.

---

## 13. Points de vigilance (Avocat du Diable intégré)

1. ⚠️ **Collecte de testimonials** en cours en parallèle du dev — objectif 3-5 vrais testimonials avant launch pour remplacer les placeholders.
2. ⚠️ **Review analytics semaine 2 et 4** post-launch — plan d'itération sur hero + CTAs des pages qui sous-convertissent.
3. ⚠️ **Resources pages 800-1200 mots minimum** — thin content = pénalité SEO.
4. ⚠️ **Copy en chantier** = goulot principal. Si Hélène écrit seule, la timeline copy est ~4 semaines.
5. ⚠️ **Scope large** = launch "big bang" risqué. Considérer au moins un soft launch privé avant d'annoncer publiquement.
6. ⚠️ **Branding CTA** (chemistry call vs free consultation) doit être cohérent : Couples = chemistry call ; Teams/Partnerships = free consultation. Champ `source` dans le form pour qu'Hélène sache le contexte.
7. ⚠️ **Self-assessment** : limiter à 1 pour l'instant, ne pas en construire 3 d'un coup.

---

## 14. Prochaines étapes (ordre proposé)

1. **Setup structure** — Router, composants, Partials, design tokens, extension nav/footer
2. **Home segmentée** — 3 cartes audiences + teaser meet + CTA
3. **Couples hub + Couples/Relocation** — les 2 pages couples (plus gros traffic potentiel et niche forte)
4. **Teams + Partnerships** — les 2 landings B2B
5. **About** (pilier de trust — critique sans testimonials)
6. **Testimonials** — avec 3 placeholders
7. **Contact** — extension du formulaire existant avec champ `source`
8. **Resources** — 5 pages evergreen
9. **Self-assessment Couples Relocation**
10. **SEO technique** (schema, hreflang, sitemap, meta, OG)
11. **Matomo + GDPR + consent**
12. **QA EN/FR + multi-device**
13. **Privacy policy étendue**

---

## 15. Décisions validées

| Décision | Valeur |
|---|---|
| Nom de marque | **theweknows** (theweknows.com) — Hélène Prat est la coach derrière |
| Architecture | Hybride (home segmentée + landings dédiées) |
| Phasing | Aucun — tout en un seul launch |
| Prix | Sur demande, structure affichée (X sessions × Y min × Z mois) |
| Langues | EN + FR |
| Testimonials | 3 placeholders au launch, collecte en parallèle |
| CTA Couples | "Book a chemistry call" |
| CTA B2B | "Book a free consultation" |
| Lead magnet | Pas de PDF — self-assessment interactif à la place |
| Self-assessment | 1 seul v1 (Couples Relocation) |
| Resources pages | 5 evergreen, 800-1200 mots chacune |
| Stack | PHP natif étendu (pas de framework) |
| Hébergement | Vercel + fallback local Apache |
| Couleurs | Celles des sections actuelles préservées (design tokens) |
