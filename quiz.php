<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Learning Intelligence Quiz</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
    }

    .quiz-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    .question {
      display: none;
      margin-bottom: 15px;
    }

    h1 {
      text-align: center;
    }

    .buttons {
      text-align: center;
      margin-top: 20px;
    }

    button {
      margin: 0 10px;
    }

    input[type="submit"] {
      display: none;
    }

    button,
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover,
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="quiz-container">
    <h1>Learning Intelligence Quiz</h1>
    <form action="process.php" method="POST">
      <!-- Question 1: Visual Learning -->
      <div class="question">
        <p>1. When studying, do you often use charts, diagrams, or pictures to help you understand and remember information?</p>
        <label><input type="radio" name="q1" value="4"> Yes, I frequently use visual aids.</label><br>
        <label><input type="radio" name="q1" value="3"> Sometimes, but not always.</label><br>
        <label><input type="radio" name="q1" value="2"> Rarely, I prefer other methods.</label><br>
        <label><input type="radio" name="q1" value="1"> No, I rarely use visual aids.</label>
      </div>

      <!-- Question 2: Visual Learning -->
      <div class="question">
        <p>2. Are you more likely to remember information when it's presented with visual cues like colors or images?</p>
        <label><input type="radio" name="q2" value="4"> Yes, visual cues help me remember better.</label><br>
        <label><input type="radio" name="q2" value="3"> Visual cues are somewhat helpful, but not my primary method.</label><br>
        <label><input type="radio" name="q2" value="2"> I prefer other methods.</label><br>
        <label><input type="radio" name="q2" value="1"> No, visual cues don't significantly impact my memory.</label>
      </div>

      <!-- Question 3: Logical Learning -->
      <div class="question">
        <p>3. When faced with a complex problem, do you prefer to break it down into smaller, logical steps to solve it?</p>
        <label><input type="radio" name="q3" value="4"> Yes, I always approach problems logically.</label><br>
        <label><input type="radio" name="q3" value="3"> I use logical steps, but it's not my only method.</label><br>
        <label><input type="radio" name="q3" value="2"> I prefer other methods.</label><br>
        <label><input type="radio" name="q3" value="1"> No, I rarely use logical steps.</label>
      </div>

      <!-- Question 4: Logical Learning -->
      <div class="question">
        <p>4. Do you excel in subjects like mathematics, science, or programming where logical reasoning is essential?</p>
        <label><input type="radio" name="q4" value="4"> Yes, I excel in logical subjects.</label><br>
        <label><input type="radio" name="q4" value="3"> I do well in logical subjects, but it's not my primary strength.</label><br>
        <label><input type="radio" name="q4" value="2"> I excel in other types of subjects.</label><br>
        <label><input type="radio" name="q4" value="1"> No, I struggle with logical subjects.</label>
      </div>

      <!-- Question 5: Verbal Learning -->
      <div class="question">
        <p>5. Are you comfortable with learning new information by reading extensively and discussing it with others?</p>
        <label><input type="radio" name="q5" value="4"> Yes, I prefer reading and discussing.</label><br>
        <label><input type="radio" name="q5" value="3"> I read and discuss, but it's not my primary method.</label><br>
        <label><input type="radio" name="q5" value="2"> I prefer other methods.</label><br>
        <label><input type="radio" name="q5" value="1"> No, I rarely read and discuss for learning.</label>
      </div>

      <!-- Question 6: Verbal Learning -->
      <div class="question">
        <p>6. Do you remember information well after explaining it to someone else or teaching it to a friend?</p>
        <label><input type="radio" name="q6" value="4"> Yes, teaching or explaining helps me remember best.</label><br>
        <label><input type="radio" name="q6" value="3"> I remember well when I teach, but it's not my primary method.</label><br>
        <label><input type="radio" name="q6" value="2"> I remember better from other methods.</label><br>
        <label><input type="radio" name="q6" value="1"> No, I don't remember well from teaching or explaining.</label>
      </div>

      <!-- Question 7: Existential Learning -->
      <div class="question">
        <p>7. Do you often ponder deep questions about the meaning of life, human existence, or philosophical concepts?</p>
        <label><input type="radio" name="q7" value="4"> Yes, I frequently contemplate existential questions.</label><br>
        <label><input type="radio" name="q7" value="3"> I think about them occasionally, but not excessively.</label><br>
        <label><input type="radio" name="q7" value="2"> I prefer other topics to contemplate.</label><br>
        <label><input type="radio" name="q7" value="1"> No, I rarely contemplate such questions.</label>
      </div>

      <!-- Question 8: Existential Learning -->
      <div class="question">
        <p>8. Are you drawn to subjects like philosophy, spirituality, or ethics that explore the fundamental nature of reality and existence?</p>
        <label><input type="radio" name="q8" value="4"> Yes, I'm very interested in existential subjects.</label><br>
        <label><input type="radio" name="q8" value="3"> I have some interest in these subjects, but it's not my primary focus.</label><br>
        <label><input type="radio" name="q8" value="2"> I'm more interested in other fields of study.</label><br>
        <label><input type="radio" name="q8" value="1"> No, I'm not particularly interested in existential subjects.</label>
      </div>

      <div class="buttons">
        <button type="button" id="prev-btn" onclick="prevQuestion()">Previous</button>
        <button type="button" id="next-btn" onclick="nextQuestion()">Next</button>
        <input type="submit" id="submit-btn" value="Submit" style="display: none;">
      </div>
    </form>
  </div>

  <script>
    let currentQuestion = 0;
    const questions = document.querySelectorAll('.question');
    const prevButton = document.getElementById('prev-btn');
    const nextButton = document.getElementById('next-btn');
    const submitButton = document.getElementById('submit-btn');

    function showQuestion(questionIndex) {
      questions.forEach((question, index) => {
        if (index === questionIndex) {
          question.style.display = 'block';
        } else {
          question.style.display = 'none';
        }
      });

      if (questionIndex === 0) {
        prevButton.style.display = 'none';
      } else {
        prevButton.style.display = 'inline-block';
      }

      if (questionIndex === questions.length - 1) {
        nextButton.style.display = 'none';
        submitButton.style.display = 'inline-block';
      } else {
        nextButton.style.display = 'inline-block';
        submitButton.style.display = 'none';
      }
    }

    function prevQuestion() {
      if (currentQuestion > 0) {
        currentQuestion--;
        showQuestion(currentQuestion);
      }
    }

    function nextQuestion() {
      if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        showQuestion(currentQuestion);
      }
    } // Initially show the first question showQuestion(currentQuestion); 
  </script>

</body>

</html>