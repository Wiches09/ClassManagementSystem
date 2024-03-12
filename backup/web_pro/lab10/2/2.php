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

    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    }


    $question = isset($_SESSION['question']) ? $_SESSION['question'] : 1;
    $score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $answer = isset($_POST['answer']) ? $_POST['answer'] : '';
        $sql = "SELECT Correct FROM questions WHERE QID = $question";
        $ret = $db->querySingle($sql);

        if ($answer == $ret) {
            $score++;
        }

        $_SESSION['score'] = $score;

        if ($question < 10) {
            $question++;
            $_SESSION['question'] = $question;
            $_SESSION['answer_' . ($question - 1)] = $answer; // Set the session key
            header("Location: {$_SERVER['PHP_SELF']}");
            exit();
        } else {
            $_SESSION['answer_' . $question] = $answer; // Set the session key for the last question
            header("Location: submit.php");
            exit();
        }
    }



    $sql = "SELECT * FROM questions WHERE QID = $question";
    $ret = $db->query($sql);

    if ($ret) {
        echo "<div class='container mt-3'>";
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<h1>Quiz Questions</h1>";
            echo "<div class='row'>";
            echo "<div class='col-md-12'>";
            echo "<div class='card-body'>";
            echo "<form method='post'>";
            echo "<div class='form-group'>";
            echo "<label>";
            echo $row['QID'] . ". " . $row['Stem'];
            echo "</label><br>";
            echo "<div class='form-check'>";
            echo "<input class='form-check-input' type='radio' name='answer' value='" . $row['Alt_A'] . "'>" . $row['Alt_A'] . "<br>";
            echo "<input class='form-check-input' type='radio' name='answer' value='" . $row['Alt_B'] . "'>" . $row['Alt_B'] . "<br>";
            echo "<input class='form-check-input' type='radio' name='answer' value='" . $row['Alt_C'] . "'>" . $row['Alt_C'] . "<br>";
            echo "<input class='form-check-input' type='radio' name='answer' value='" . $row['Alt_D'] . "'>" . $row['Alt_D'] . "<br>";
            echo "</div>";
            echo "</div><br>";
            echo "<button type='submit' class='btn btn-primary'>Next</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }





    ?>




</body>

</html>