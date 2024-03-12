<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <style>
        body {
            font-size: 20px;
            font-family: Chakra_Petch;

        }

        @font-face {
            font-family: Chakra_Petch;
            src: url(Chakra_Petch/ChakraPetch-Regular.ttf);
        }
    </style>
</head>

<body>
    <?php

    session_start();

    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('questions.db');
        }
    }

    $conn = new MyDB();
    if (!$conn) {
        echo $conn->lastErrorMsg();
    }

    $currentQuestionNumber = isset($_SESSION['currentQuestionNumber']) ? $_SESSION['currentQuestionNumber'] : 1;


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $answeredCurrentQuestion = isset($_POST['question_' . $currentQuestionNumber]);

        if ($answeredCurrentQuestion) {
            $currentQuestionNumber++;
            $_SESSION['answer_' . ($currentQuestionNumber - 1)] = $_POST['question_' . ($currentQuestionNumber - 1)];
        }
        $_SESSION['currentQuestionNumber'] = $currentQuestionNumber;
    }

    // Query database to fetch the current question
    $query = "SELECT * FROM questions WHERE QID = :qid";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':qid', $currentQuestionNumber, SQLITE3_INTEGER);
    $result = $stmt->execute();
    $row = $result->fetchArray(SQLITE3_ASSOC);

    // Check if there's no more questions
    if (!$row) {
        // Display total correct answers and end the quiz
        $totalQuestions = $currentQuestionNumber - 1;
        $totalCorrect = 0;

        // Check answers
        for ($i = 1; $i <= $totalQuestions; $i++) {
            $stmt = $conn->prepare('SELECT Correct FROM questions WHERE QID = :qid');
            $stmt->bindValue(':qid', $i, SQLITE3_INTEGER);
            $result = $stmt->execute();
            $correctAnswer = $result->fetchArray()['Correct'];

            if ($_SESSION['answer_' . $i] === $correctAnswer) {
                $totalCorrect++;
            }
        }

        echo '<div class="container mt-3">';
        echo '<div class="alert alert-primary" role="alert">';
        echo 'Total Questions: ' . $totalQuestions . '<br>';
        echo 'Total Correct Answers: ' . $totalCorrect;
        echo '</div>';
        echo '</div>';

        session_unset();
        session_destroy();
        exit();
    }
    ?>
    <div class="container mt-3">
        <h1>Quiz Questions</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label>
                                <?= $row['QID'] ?>.
                                <?= $row['Stem'] ?>
                            </label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question_<?= $row['QID'] ?>" id="question_<?= $row['QID'] ?>_alt_a" value="A">
                                <label class="form-check-label" for="question_<?= $row['QID'] ?>_alt_a"><?= $row['Alt_A'] ?></label><br>
                                <input class="form-check-input" type="radio" name="question_<?= $row['QID'] ?>" id="question_<?= $row['QID'] ?>_alt_b" value="B">
                                <label class="form-check-label" for="question_<?= $row['QID'] ?>_alt_b"><?= $row['Alt_B'] ?></label><br>
                                <input class="form-check-input" type="radio" name="question_<?= $row['QID'] ?>" id="question_<?= $row['QID'] ?>_alt_c" value="C">
                                <label class="form-check-label" for="question_<?= $row['QID'] ?>_alt_c"><?= $row['Alt_C'] ?></label><br>
                                <input class="form-check-input" type="radio" name="question_<?= $row['QID'] ?>" id="question_<?= $row['QID'] ?>_alt_d" value="D">
                                <label class="form-check-label" for="question_<?= $row['QID'] ?>_alt_d"><?= $row['Alt_D'] ?></label><br>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>