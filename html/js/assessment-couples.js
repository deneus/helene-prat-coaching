/* ===== Couples Self-Assessment ===== */
(function () {
  'use strict';

  var questions = [
    {
      text: 'How long ago did you (or will you) move to a new country together?',
      answers: [
        { label: 'More than 3 years ago — or not applicable', weight: 0 },
        { label: '1 to 3 years ago', weight: 1 },
        { label: 'Less than a year ago', weight: 2 },
        { label: 'We are moving in the next 12 months', weight: 2 }
      ]
    },
    {
      text: 'How would each of you describe the move, if you had to use one word?',
      answers: [
        { label: 'We would both say something like "adventure"', weight: 0 },
        { label: 'One of us says "adventure", the other says "overwhelming"', weight: 2 },
        { label: 'We would both say something like "heavy"', weight: 3 },
        { label: 'We have never actually had this conversation', weight: 3 }
      ]
    },
    {
      text: 'When hard feelings about the move come up, what usually happens?',
      answers: [
        { label: 'We talk about them openly, even when it is uncomfortable', weight: 0 },
        { label: 'We mention them briefly and move on', weight: 1 },
        { label: 'One of us shares, the other changes the subject', weight: 2 },
        { label: 'Nobody brings them up — we are just trying to get through the week', weight: 3 }
      ]
    },
    {
      text: 'How do you feel about the life you left behind?',
      answers: [
        { label: 'We have both processed the grief and closed that chapter', weight: 0 },
        { label: 'One of us has, the other has not', weight: 2 },
        { label: 'We both still carry unspoken grief', weight: 3 },
        { label: 'We do not think grief is the right word — we both just miss it sometimes', weight: 1 }
      ]
    },
    {
      text: 'When you think about your partner\'s daily reality in your new country, how well do you understand it?',
      answers: [
        { label: 'Very well — we talk about it often', weight: 0 },
        { label: 'Broadly, but there are probably parts I do not see', weight: 1 },
        { label: 'I am honestly not sure', weight: 2 },
        { label: 'We live fairly parallel lives since the move', weight: 3 }
      ]
    },
    {
      text: 'How is your shared sense of "what home means now"?',
      answers: [
        { label: 'Clear, shared, and we are building toward it together', weight: 0 },
        { label: 'Still forming, but we are on the same page', weight: 1 },
        { label: 'Different for each of us, and we have not bridged it', weight: 2 },
        { label: 'We are both quietly waiting for the other to feel at home first', weight: 3 }
      ]
    },
    {
      text: 'Have you had deliberate, honest conversations about what each of you needs in this chapter?',
      answers: [
        { label: 'Yes, regularly', weight: 0 },
        { label: 'Once or twice, early on', weight: 1 },
        { label: 'Tried, did not go well, did not retry', weight: 2 },
        { label: 'Not yet — there has been no space for it', weight: 3 }
      ]
    },
    {
      text: 'If you imagine this year going well for your couple, what is the first thing that comes to mind?',
      answers: [
        { label: 'We have a clear picture and we are already moving toward it', weight: 0 },
        { label: 'We have a picture, but it is fuzzy and unshared', weight: 1 },
        { label: 'We each have our own picture, and they do not fully match', weight: 2 },
        { label: 'Honestly, neither of us has paused long enough to imagine it', weight: 3 }
      ]
    }
  ];

  var results = [
    {
      max: 6,
      title: 'You are in a healthy transition',
      body: 'Your couple is adjusting the way couples are supposed to adjust: with awareness, with conversation, and with space for both of you. Nothing in your answers suggests distress — and that is genuinely worth celebrating.',
      guidance: 'Coaching at this stage can help you deepen the work you are already doing: turning intuitive good habits into explicit practices, and using the transition as a growth moment rather than just something to survive.'
    },
    {
      max: 14,
      title: 'You are in a real but navigable transition',
      body: 'Your answers point to meaningful tension — different paces, unprocessed losses, or conversations you have not had yet. None of this is unusual. All of it is workable, especially if you act before the patterns harden.',
      guidance: 'Systemic coaching is designed exactly for this moment. A handful of sessions can give you the language, the space, and the rituals to name what is happening and move through it together.'
    },
    {
      max: 20,
      title: 'Your couple is carrying significant strain',
      body: 'The patterns you describe — parallel lives, difficult conversations avoided, no shared picture of "what home means now" — are the early signs of drift. They are not a sign your couple is failing. They are a sign your couple is under-supported in a transition that is genuinely hard.',
      guidance: 'We would strongly recommend you book a free chemistry call with Hélène. Coaching at this stage can help you catch the drift before it becomes damage — and turn this transition into something that ultimately strengthens your couple.'
    },
    {
      max: 100,
      title: 'You may need more than coaching',
      body: 'Your answers suggest the weight you are carrying is heavy — heavier than what coaching alone is usually built for. That is not a judgment, and it is not a reason to give up. It is a sign to get the right kind of support.',
      guidance: 'We recommend you book a free chemistry call anyway. Hélène will listen honestly, and if coaching is not the right fit, she will help you figure out what would actually serve you — which might be therapy, couples counseling, or a combination of approaches.'
    }
  ];

  var state = {
    step: 0,
    answers: []
  };

  var elIntro = document.getElementById('quiz-intro');
  var elQuestions = document.getElementById('quiz-questions');
  var elResult = document.getElementById('quiz-result');
  var elStart = document.getElementById('quiz-start');
  var elQText = document.getElementById('quiz-question-text');
  var elAnswers = document.getElementById('quiz-answers');
  var elPrev = document.getElementById('quiz-prev');
  var elNext = document.getElementById('quiz-next');
  var elCurrent = document.getElementById('quiz-current');
  var elTotal = document.getElementById('quiz-total');
  var elBar = document.getElementById('quiz-progress-bar');
  var elResultTitle = document.getElementById('quiz-result-title');
  var elResultBody = document.getElementById('quiz-result-body');
  var elResultGuidance = document.getElementById('quiz-result-guidance');
  var elRestart = document.getElementById('quiz-restart');

  if (!elIntro || !elQuestions || !elResult) return;

  elTotal.textContent = String(questions.length);

  function showIntro() {
    elIntro.style.display = '';
    elQuestions.style.display = 'none';
    elResult.style.display = 'none';
  }

  function showQuestions() {
    elIntro.style.display = 'none';
    elQuestions.style.display = '';
    elResult.style.display = 'none';
    renderQuestion();
  }

  function showResult() {
    elIntro.style.display = 'none';
    elQuestions.style.display = 'none';
    elResult.style.display = '';
    var total = state.answers.reduce(function (sum, a) { return sum + a; }, 0);
    var bucket = results.find(function (r) { return total <= r.max; });
    elResultTitle.textContent = bucket.title;
    elResultBody.textContent = bucket.body;
    elResultGuidance.textContent = bucket.guidance;
  }

  function renderQuestion() {
    var q = questions[state.step];
    elCurrent.textContent = String(state.step + 1);
    elBar.style.width = ((state.step + 1) / questions.length * 100) + '%';
    elQText.textContent = q.text;
    elAnswers.innerHTML = '';
    q.answers.forEach(function (answer, idx) {
      var btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'quiz-answer-btn';
      btn.style.cssText = 'text-align:left; padding:14px 20px; border-radius:12px; border:2px solid transparent; background:var(--color-white); color:var(--color-text); font-family:var(--font-body); font-size:0.95rem; cursor:pointer; transition:all 0.2s ease;';
      btn.textContent = answer.label;
      if (state.answers[state.step] === answer.weight && state.selectedIndex === idx) {
        btn.style.borderColor = 'var(--color-primary)';
        btn.style.background = 'var(--color-accent-light)';
      }
      btn.addEventListener('click', function () {
        state.answers[state.step] = answer.weight;
        state.selectedIndex = idx;
        Array.prototype.forEach.call(elAnswers.children, function (c) {
          c.style.borderColor = 'transparent';
          c.style.background = 'var(--color-white)';
        });
        btn.style.borderColor = 'var(--color-primary)';
        btn.style.background = 'var(--color-accent-light)';
        elNext.disabled = false;
      });
      btn.addEventListener('mouseenter', function () {
        if (state.answers[state.step] === undefined || state.selectedIndex !== idx) {
          btn.style.background = 'var(--color-bg)';
        }
      });
      btn.addEventListener('mouseleave', function () {
        if (state.answers[state.step] === undefined || state.selectedIndex !== idx) {
          btn.style.background = 'var(--color-white)';
        }
      });
      elAnswers.appendChild(btn);
    });
    elPrev.style.visibility = state.step === 0 ? 'hidden' : 'visible';
    elNext.disabled = state.answers[state.step] === undefined;
    elNext.textContent = state.step === questions.length - 1 ? 'See your result' : 'Next';
  }

  elStart.addEventListener('click', function () {
    state.step = 0;
    state.answers = [];
    state.selectedIndex = undefined;
    showQuestions();
  });

  elPrev.addEventListener('click', function () {
    if (state.step > 0) {
      state.step--;
      state.selectedIndex = undefined;
      renderQuestion();
    }
  });

  elNext.addEventListener('click', function () {
    if (state.answers[state.step] === undefined) return;
    if (state.step === questions.length - 1) {
      showResult();
    } else {
      state.step++;
      state.selectedIndex = undefined;
      renderQuestion();
    }
  });

  elRestart.addEventListener('click', function () {
    state.step = 0;
    state.answers = [];
    state.selectedIndex = undefined;
    showIntro();
  });

  showIntro();
})();
