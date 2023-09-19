<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learning Intelligence Assessment</title>
  <!-- Add Bootstrap CSS Link -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

  <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>

</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Learning Intelligence Assessment</h1>
    <div id="quiz-container">
      <!-- Questions and Options will be inserted here dynamically -->
    </div>
    <div class="text-center mt-3">
      <div id="remaining-questions"></div>
      <button class="btn btn-primary" id="submit-button">Submit</button>
    </div>
  </div>

  <!-- Add Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    const questions = [
      "1. How do you typically approach a new subject or topic to learn?",
      "2. When studying for an exam, what strategies do you find most effective?",
      "3. How would you describe your memory capacity?",
      "4. Do you prefer a structured learning environment or a more flexible one?",
      "5. How do you deal with challenges or setbacks in your learning journey?",
      "6. Are you more inclined towards visual, auditory, or kinesthetic learning?",
      "7. How do you manage your time when studying or working on assignments?",
      "8. How do you feel about collaborating with others on group projects or assignments?",
      "9. What is your preferred method for reviewing and revising content?",
      "10. How do you handle stress during exams or important assessments?",
      "11. How do you approach online learning or e-learning platforms?",
      "12. How do you assess the credibility and quality of online information sources?",
      "13. When faced with a difficult problem, what is your problem-solving approach?",
      "14. How do you balance your academic commitments with other aspects of your life?",
      "15. Do you prefer to learn independently or with guidance from instructors?",
      "16. How do you approach pre-planning and organization for assignments and projects?",
      "17. What role does creativity play in your learning process?",
      "18. How do you approach time management when working on long-term projects?",
      "19. How do you respond to failure or mistakes in your academic work?",
      "20. What motivates you to learn and excel academically?",
      // Add more questions here up to 30
    ];

    const options = [
      [
        "a) I like to read books and gather information on my own.",
        "b) I prefer to attend lectures or classes to learn from an instructor.",
        "c) I learn best through hands-on experiences or practical applications.",
        "d) I rely on discussions and interactions with peers.",
      ],
      [
        "a) I create a detailed study schedule and stick to it rigorously.",
        "b) I review class notes and textbooks at my own pace.",
        "c) I seek help from a tutor or academic support services.",
        "d) I practice with past exam papers or quizzes.",
      ],
      [
        "a) Excellent - I can remember information easily and for a long time.",
        "b) Average - My memory is decent, but I need to review frequently.",
        "c) Below Average - I struggle to remember information.",
        "d) Poor - I have a hard time retaining information.",
      ],
      [
        "a) I prefer a structured learning environment with clear guidelines.",
        "b) I like a mix of structure and flexibility.",
        "c) I thrive in a flexible environment where I can explore on my own.",
        "d) I dont have a preference.",
      ],
      [
        "a) I view them as opportunities to learn and grow.",
        "b) I feel discouraged but keep trying.",
        "c) I seek help and guidance to overcome them.",
        "d) I get frustrated and might give up.",
      ],
      [
        "a) Visual - I learn best through images, diagrams, and visual aids.",
        "b) Auditory - I learn best by listening and discussing.",
        "c) Kinesthetic - I learn best through hands-on activities.",
        "d) I have a combination of these learning styles.",
      ],
      [
        "a) I create a daily to-do list and follow it meticulously.",
        "b) I prioritize tasks but leave some flexibility.",
        "c) I often work on tasks spontaneously without a specific plan.",
        "d) I struggle with time management.",
      ],
      [
        "a) I enjoy collaboration and believe it enhances creativity.",
        "b) I am open to collaboration but can work independently.",
        "c) I prefer working alone to maintain control over the project.",
        "d) I dislike group work and prefer solo projects.",
      ],
      [
        "a) I rewrite my notes and use flashcards for review.",
        "b) I discuss the material with peers or teaching assistants.",
        "c) I create concept maps or diagrams to visualize information.",
        "d) I re-read textbooks and lecture notes.",
      ],
      [
        "a) I manage stress effectively and use relaxation techniques.",
        "b) I get stressed but find ways to cope.",
        "c) I tend to get anxious but push through it.",
        "d) I become highly anxious and it affects my performance.",
      ],
      [
        "a) I adapt well to online learning and engage actively.",
        "b) I prefer in-person learning but can adapt to online environments.",
        "c) I struggle with online learning and need more structure.",
        "d) I find online learning extremely challenging.",
      ],
      [
        "a) I check the sources credibility and verify information with reliable sources.",
        "b) I trust sources that appear reputable without verification.",
        "c) I sometimes struggle to determine source credibility.",
        "d) I dont pay much attention to source credibility.",
      ],
      [
        "a) I break the problem into smaller parts and analyze each one.",
        "b) I seek help and guidance from others.",
        "c) I try various approaches until something works.",
        "d) I get frustrated and give up easily.",
      ],
      [
        "a) I have a well-balanced life and prioritize self-care.",
        "b) I balance academics and personal life but may lean towards one.",
        "c) I prioritize academics over personal life.",
        "d) I often neglect self-care due to academic commitments.",
      ],
      [
        "a) I enjoy learning independently and set my own pace.",
        "b) I prefer guidance from instructors but can work independently.",
        "c) I rely on guidance from instructors for most of my learning.",
        "d) I struggle with independent learning.",
      ],
      [
        "a) I create a detailed plan and stick to it from the beginning.",
        "b) I plan as I go, adjusting as needed.",
        "c) I often procrastinate planning until the last minute.",
        "d) I dont plan my projects or assignments.",
      ],
      [
        "a) I use creative approaches in my learning and problem-solving.",
        "b) I incorporate creativity when relevant but not always.",
        "c) I stick to traditional methods without much creativity.",
        "d) I dont consider creativity in my learning.",
      ],
      [
        "a) I break the project into smaller tasks and set deadlines.",
        "b) I manage my time but sometimes struggle with long-term projects.",
        "c) I often procrastinate and rush to finish before the deadline.",
        "d) I have difficulty managing time for long-term projects.",
      ],
      [
        "a) I view failure as a learning opportunity and stay motivated.",
        "b) I feel discouraged but keep trying.",
        "c) I tend to get demotivated and may need external encouragement.",
        "d) I become demotivated and give up easily.",
      ],
      [
        "a) Intrinsic motivation - I enjoy learning for its own sake.",
        "b) External rewards - Im motivated by grades and external recognition.",
        "c) Social motivation - Im motivated by peer competition and recognition.",
        "d) I lack motivation and often need external incentives.",
      ],
      // Add more options here
    ];

    const learningIntelligenceResults = [
      "You have a strong Visual-Spatial Intelligence.",
      "Your have Mathematical-Logical Intelligence.",
      "You excel in Bodily-Kinesthetic Intelligence.",
      "You have Verbal-Linguistic Intelligence .",
      // Add more learning intelligence results as needed
    ];

    let currentQuestion = 0;
    const quizContainer = document.getElementById("quiz-container");
    const remainingQuestionsDiv = document.getElementById(
      "remaining-questions"
    );
    const answers = [];

    function loadQuestion() {
      const questionDiv = document.createElement("div");
      questionDiv.classList.add("form-group");
      questionDiv.innerHTML = `<label><strong>${questions[currentQuestion]}</strong></label><br>`;
      options[currentQuestion].forEach((option) => {
        questionDiv.innerHTML += `
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="option${options[
                      currentQuestion
                    ].indexOf(option)}" name="answer" value="${
            option.split(")")[0]
          }" required>
                    <label class="form-check-label" for="option${options[
                      currentQuestion
                    ].indexOf(option)}">${option}</label>
                </div>
            `;
      });
      quizContainer.innerHTML = ""; // Clear previous question
      quizContainer.appendChild(questionDiv);
      remainingQuestionsDiv.textContent = `Remaining questions: ${
          questions.length - currentQuestion - 1
        }`;
    }

    function showResults() {
      const selectedOptions = document.querySelectorAll(
        'input[name="answer"]:checked'
      );
      selectedOptions.forEach((option) => {
        answers.push(option.value);
      });

      // Randomly select a learning intelligence result
      const randomResultIndex = Math.floor(
        Math.random() * learningIntelligenceResults.length
      );
      const randomResult = learningIntelligenceResults[randomResultIndex];

      alert(randomResult);
    }

    function handleAnswer() {
      const selectedOptions = document.querySelectorAll(
        'input[name="answer"]:checked'
      );
      if (selectedOptions.length === 0) {
        alert("Please select an answer before proceeding.");
      } else {
        currentQuestion++;
        if (currentQuestion < questions.length) {
          loadQuestion();
        } else {
          showResults();
          // Optionally, you can submit the form to a server here if needed.
        }
      }
    }

    loadQuestion();

    const submitButton = document.getElementById("submit-button");
    submitButton.addEventListener("click", function(event) {
      event.preventDefault();
      handleAnswer();
    });
  </script>
</body>

</html>