<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modified Quiz</title>
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

    $question = isset($_SESSION['question']) ? $_SESSION['question'] : 1;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $answer = isset($_POST['question_' . $question]);

        if ($answer) {
            $question++;
            $_SESSION['answer_' . ($question - 1)] = $_POST['question_' . ($question - 1)];
        }
        $_SESSION['question'] = $question;
    }

    // Query database to fetch the current question
    $query = "SELECT * FROM questions WHERE QID = :qid";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':qid', $question, SQLITE3_INTEGER);
    $result = $stmt->execute();
    $row = $result->fetchArray(SQLITE3_ASSOC);


    if (!$row) {
        $totalQuestions = $question - 1;
        $totalCorrect = 0;
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
        echo '<div class="alert alert-danger" role="alert">';
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
                            <label><?= $row['QID'] ?>. <?= $row['Stem'] ?></label><br>
                            <?php
                            $options = ['A', 'B', 'C', 'D'];
                            foreach ($options as $option) {
                                echo '<div class="form-check">';
                                echo '<input class="form-check-input" type="radio" name="question_' . $row['QID'] . '" id="question_' . $row['QID'] . '_alt_' . strtolower($option) . '" value="' . $option . '">';
                                echo '<label class="form-check-label" for="question_' . $row['QID'] . '_alt_' . strtolower($option) . '">' . $row['Alt_' . $option] . '</label><br>';
                                echo '</div>';
                            }
                            ?>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>