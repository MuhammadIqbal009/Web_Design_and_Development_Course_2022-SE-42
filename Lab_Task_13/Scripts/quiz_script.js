let selectedCategory = null;
let selectedDifficulty = null;
let questions = [];
let currentIndex = 0;
let score = 0;

// Decode HTML
function decodeHTML(text) {
  let txt = document.createElement("textarea");
  txt.innerHTML = text;
  return txt.value;
}

// Welcome → Category
function startWelcome() {
  document.getElementById("welcomePopup").classList.add("d-none");
  document.getElementById("stepCategory").classList.remove("d-none");
}

// Category select
function selectCategory(cat) {
  selectedCategory = cat;
  document.getElementById("stepCategory").classList.add("d-none");
  document.getElementById("stepDifficulty").classList.remove("d-none");
}

// Difficulty select
function selectDifficulty(diff) {
  selectedDifficulty = diff;
  document.getElementById("stepDifficulty").classList.add("d-none");
  document.getElementById("stepStart").classList.remove("d-none");
}

// Start quiz
function startQuiz() {
  // Hide Start screen, show loader
  document.getElementById("stepStart").classList.add("d-none");
  document.getElementById("loading").classList.remove("d-none");

  fetch(`https://opentdb.com/api.php?amount=5&category=${selectedCategory}&difficulty=${selectedDifficulty}&type=multiple`)
    .then(res => res.json())
    .then(data => {
      document.getElementById("loading").classList.add("d-none"); // Hide loader

      if (!data.results.length) {
        alert("No quiz data found!");
        document.getElementById("welcomePopup").classList.remove("d-none");
        return;
      }

      questions = data.results;
      currentIndex = 0;
      score = 0;

      document.getElementById("quiz").classList.remove("d-none");
      showQuestion();
    })
    .catch(err => {
      document.getElementById("loading").classList.add("d-none"); // Hide loader even on error
      alert("Error fetching data. Please try again!");
    });
}


// Show question
function showQuestion() {
  let q = questions[currentIndex];
  document.getElementById("progress").innerText = `Question ${currentIndex + 1}/${questions.length}`;
  document.getElementById("liveScore").innerText = score;

  let percent = ((currentIndex) / questions.length) * 100;
  document.getElementById("progressBar").style.width = percent + "%";

  document.getElementById("questionBox").innerHTML = decodeHTML(q.question);

  let answers = [...q.incorrect_answers, q.correct_answer];
  answers.sort(() => Math.random() - 0.5);

  let answersDiv = document.getElementById("answers");
  answersDiv.innerHTML = "";

  ["A", "B", "C", "D"].forEach((label, i) => {
    let answer = decodeHTML(answers[i]);
    let btn = document.createElement("div");
    btn.className = "answer-btn";
    btn.innerHTML = `<span class="label">${label}:</span> ${answer}`;
    btn.onclick = () => checkAnswer(answer, q.correct_answer, btn);
    answersDiv.appendChild(btn);
  });
}

// Check answer
function checkAnswer(selected, correct, element) {
  let buttons = document.querySelectorAll(".answer-btn");
  buttons.forEach(btn => btn.classList.add("disabled"));

  if (decodeHTML(selected) === decodeHTML(correct)) {
    element.classList.add("correct");
    score++;
    document.getElementById("liveScore").innerText = score;
  } else {
    element.classList.add("wrong");
    buttons.forEach(btn => {
      if (btn.innerText.includes(decodeHTML(correct))) {
        btn.classList.add("correct");
      }
    });
  }
  document.getElementById("nextBtn").classList.remove("d-none");
}

// Next question
function nextQuestion() {
  currentIndex++;
  document.getElementById("nextBtn").classList.add("d-none");

  if (currentIndex < questions.length) {
    showQuestion();
  } else {
    showResult();
  }
}

// Show result
function showResult() {
  document.getElementById("quiz").classList.add("d-none");
  document.getElementById("result").classList.remove("d-none");

  document.getElementById("score").innerText = `${score}/${questions.length}`;

  let emoji = "🙂";
  let message = "Good effort!";

  if (score === questions.length) {
    emoji = "🎉🏆";
    message = "Perfect! Genius!";
    triggerCelebration(); // 🎊 Trigger confetti and sound
  } else if (score >= questions.length / 2) {
    emoji = "👏😊";
    message = "Well done!";
  } else {
    emoji = "😢";
    message = "Keep trying!";
  }

  document.getElementById("resultEmoji").innerText = emoji;
  document.getElementById("resultMessage").innerText = message;
}


// Restart
function restartQuiz() {
  document.getElementById("result").classList.add("d-none");
  document.getElementById("welcomePopup").classList.remove("d-none");
  selectedCategory = null;
  selectedDifficulty = null;
}

// 🎊 Celebration Animation + Sound
function triggerCelebration() {
  const audio = document.getElementById("celebrationSound");

  if (audio) {
    audio.currentTime = 0;
    const playPromise = audio.play();

    if (playPromise !== undefined) {
      playPromise
        .then(() => console.log("🎺 Local sound playing"))
        .catch(err => console.warn("⚠️ Could not play sound:", err));
    }
  }

  const duration = 3 * 1000;
  const end = Date.now() + duration;

  (function frame() {
    confetti({
      particleCount: 6,
      angle: 60,
      spread: 60,
      origin: { x: 0 },
    });
    confetti({
      particleCount: 6,
      angle: 120,
      spread: 60,
      origin: { x: 1 },
    });

    if (Date.now() < end) {
      requestAnimationFrame(frame);
    }
  })();
}

