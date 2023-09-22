<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and calculate scores
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];

    // Calculate total scores for each category
    $visual_score = $q1 + $q2;
    $logical_score = $q3 + $q4;
    $verbal_score = $q5 + $q6;
    $existential_score = $q7 + $q8;

    // Determine the preferred learning intelligence style
    $learning_styles = [
        "Visual" => $visual_score,
        "Logical" => $logical_score,
        "Verbal" => $verbal_score,
        "Existential" => $existential_score,
    ];

    $preferred_style = array_search(max($learning_styles), $learning_styles);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Learning Intelligence Quiz Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="quiz-container">
        <h1>Your Learning Intelligence</h1>
        <?php if (isset($preferred_style)) : ?>
            <p>Your preferred learning intelligence style is: <strong><?= $preferred_style ?></strong></p>
        <?php endif; ?>
        <a href="quiz.php">Take the quiz again</a>
    </div>
</body>

</html>