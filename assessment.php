<!DOCTYPE html>
<html>

<head>
    <title>Tab Example</title>
    <style>
        /* Style for tabs */
        .tab {
            display: none;
        }

        /* Style for tab buttons */
        .tab-button {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Style for the active tab button */
        .active-tab {
            background-color: #ccc;
        }

        /* Style for tabs */
        .tab-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .tab {
            display: none;
        }

        /* Style for tab buttons */
        .tab-button {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 10px 20px;
            cursor: pointer;
            margin: 5px;
            /* Add spacing between buttons */
        }

        /* Style for the active tab button */
        .active-tab {
            background-color: #ccc;
        }

        /* Additional styles for better appearance */
        .tab-content {
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>

    </style>
</head>

<body>
    <div class="tab-container">
        <!-- Tab buttons -->
        <div>
            <button class="tab-button" onclick="openTab('tab1')">Already,I know my intelligence</button>
            <button class="tab-button" onclick="openTab('tab2')">Want to Take Test</button>
            <button class="tab-button" onclick="openTab('tab3')">Want to Understand Deeply</button>
        </div>

        <!-- Tab content -->
        <div id="tab1" class="tab tab-content">
            <!-- <div id="tab1" class="tab"> -->
            <!-- <h2>Tab 1 Content</h2>
        <p>This is the content of Tab 1.</p> -->
            <label for="intelligence-type">Select Intelligence Type:</label>
            <select id="intelligence-type">
                <option value="verbal">Verbal/Linguistic</option>
                <option value="visual">Visual/Spatial</option>
                <option value="existential">Existential</option>
                <option value="logical">Logical/Mathematical</option>
            </select>
        </div>
        <div id="tab2" class="tab tab-content">
            <!-- <div id="tab2" class="tab"> -->
            <h2>Take Assessment Here</h2>
            <p></p>

            <head>
                <title>Take Assessment Button</title>
                <style>
                    /* Add your CSS styles here */
                    /* Resetting some default styles */
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                    }

                    /* Center-aligning heading level 1 */
                    h1 {
                        text-align: center;
                    }

                    /* Adding consistent margin to heading levels 2 and 3 */
                    h2,
                    h3 {
                        margin-top: 20px;
                    }

                    /* Styling labels with a consistent margin-bottom */
                    label {
                        display: block;
                        margin-bottom: 10px;
                    }

                    /* Adding margin to select elements for spacing */
                    select {
                        margin-bottom: 20px;
                    }

                    /* Styling specific elements with bold font-weight */
                    #verbal-total,
                    #visual-total,
                    #logical-total,
                    #existential-total {
                        font-weight: bold;
                    }

                    /* Styling the total score with larger font size and bold */
                    #total-score {
                        font-size: 24px;
                        font-weight: bold;
                    }

                    /* Add a border to select elements for a more polished look */
                    select {
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        padding: 5px;
                    }

                    /* Add a subtle background color to labels for improved readability */
                    label {
                        background-color: #f0f0f0;
                        padding: 5px;
                    }
                </style>
            </head>

            <body>

                <button type="button" id="assessmentButton">Take Assessment</button>

                <!-- Your assessment form code -->
                <div id="assessmentForm" style="display: none;">
                    <h1>Multiple Intelligence Quiz</h1>
                    <!-- Rest of your assessment form code here -->
                    <form>
                        <h2>Verbal/Linguistic</h2>
                        <label>I can use lots of different words to express myself.</label>
                        <select name="verbal1">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I feel comfortable working with language and words.</label>
                        <select name="verbal2">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>

                        <label>I tend to remember things exactly as they are said to me.</label>
                        <select name="verbal4">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>

                        <label>I find it easy to explain things to others.</label>
                        <select name="verbal6">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>


                        <label>I like to read a lot.</label>
                        <select name="verbal8">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <h3>Total: <span id="verbal-total">0</span></h3>

                        <h2>Visual/Spatial</h2>
                        <label>I understand colour combinations and what colours work well together.</label>
                        <select name="visual1">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I enjoy solving jigsaw, maze and/or other visual puzzles.</label>
                        <select name="visual2">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I read charts and maps easily.</label>
                        <select name="visual3">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>




                        <label>I can anticipate the moves and consequences in a game plan (i.e., hockey sense, chess sense).</label>
                        <select name="visual6">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I can picture scenes in my head when I remember things.</label>
                        <select name="visual7">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <h3>Total: <span id="visual-total">0</span></h3>


                        <h2>Logical/Mathematical</h2>
                        <label>I work best in an organised work area.</label>
                        <select name="logical1">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I enjoy maths and using numbers.</label>
                        <select name="logical2">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I keep a ‘things to do’ list.</label>
                        <select name="logical3">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>

                        <label>I work best when I have a day planner or timetable.</label>
                        <select name="logical6">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I quickly grasp cause and effect relationships.</label>
                        <select name="logical7">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>

                        <h3>Total: <span id="logical-total">0</span></h3>

                        <h2>Existential</h2>
                        <label>I have strong beliefs about the meaning of life.</label>
                        <select name="existential1">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I often think about the purpose of my existence.</label>
                        <select name="existential2">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I am interested in spirituality and/or religion.</label>
                        <select name="existential3">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I often contemplate the mysteries of the universe.</label>
                        <select name="existential4">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <label>I am interested in exploring different cultures and their beliefs.</label>
                        <select name="existential5">
                            <option value="1">1 - No, the statement is not at all like me</option>
                            <option value="2">2 - The statement is a little like me</option>
                            <option value="3">3 - The statement is somewhat like me</option>
                            <option value="4">4 - The statement is a lot like me</option>
                            <option value="5">5 - Yes, the statement is definitely me</option>
                        </select>
                        <h3>Total: <span id="existential-total">0</span></h3>

                        <h2>Total Score: <span id="total-score">0</span></h2>


                    </form>

                </div>

                <script>
                    const assessmentButton = document.getElementById('assessmentButton');
                    const assessmentForm = document.getElementById('assessmentForm');

                    assessmentButton.addEventListener('click', function() {
                        // Toggle the visibility of the assessment form
                        if (assessmentForm.style.display === 'none' || assessmentForm.style.display === '') {
                            assessmentForm.style.display = 'block';
                        } else {
                            assessmentForm.style.display = 'none';
                        }
                    });


                    const intelligenceTypes = ['verbal', 'visual', 'logical', 'existential'];
                    const totalScores = {};

                    function calculateTotal(questions, type) {
                        let sum = 0;
                        for (let i = 0; i < questions.length; i++) {
                            sum += parseInt(questions[i].value);
                        }
                        totalScores[type] = sum;
                        return sum;
                    }

                    function updateTotalScore() {
                        let total = 0;
                        for (const type in totalScores) {
                            total += totalScores[type];
                            document.getElementById(`${type}-total`).textContent = totalScores[type];
                        }
                        document.getElementById('total-score').textContent = total;
                    }

                    for (const type of intelligenceTypes) {
                        const questions = document.querySelectorAll(`select[name^="${type}"]`);
                        const totalElement = document.getElementById(`${type}-total`);

                        for (let i = 0; i < questions.length; i++) {
                            questions[i].addEventListener('change', function() {
                                const total = calculateTotal(questions, type);
                                totalElement.textContent = total;
                                updateTotalScore();
                            });
                        }
                    }

                    // Add a function to reset scores to 0 when the page loads
                    function resetScores() {
                        for (const type in totalScores) {
                            totalScores[type] = 0;
                            document.getElementById(`${type}-total`).textContent = 0;
                        }
                        document.getElementById('total-score').textContent = 0;
                    }

                    // Call the resetScores function when the page loads
                    window.addEventListener('load', resetScores);
                </script>

            </body>


        </div>

        <script>
            // Function to open a specific tab and hide others
            function openTab(tabName) {
                var tabs = document.getElementsByClassName("tab");
                var buttons = document.getElementsByClassName("tab-button");

                for (var i = 0; i < tabs.length; i++) {
                    tabs[i].style.display = "none";
                    buttons[i].classList.remove("active-tab");
                }

                document.getElementById(tabName).style.display = "block";
                document.querySelector(`button[onclick="openTab('${tabName}')"]`).classList.add("active-tab");
            }

            // Open the first tab by default
            openTab('tab1');
        </script>

    </div>


    <div id="tab3" class="tab tab-content">
        <h2>Tab 3 Content</h2>
        <p>This is the content of Tab 3.</p>

        <iframe src="https://www.literacynet.org/mi/assessment/findyourstrengths.html" width="100%" height="560" frameborder="0"></iframe>
    </div>
    </div>

</body>

</html>