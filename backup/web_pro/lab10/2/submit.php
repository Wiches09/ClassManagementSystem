<?php
session_start();

if (isset($_SESSION['score'])) {
    $score = $_SESSION['score'];

    // Connect to the database
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
        exit();
    }

    // Calculate total correct answers
    $totalQuestions = 10;
    $totalCorrect = 0;

    for ($i = 1; $i <= $totalQuestions; $i++) {
        $stmt = $db->prepare('SELECT Correct FROM questions WHERE QID = :qid');
        $stmt->bindValue(':qid', $i, SQLITE3_INTEGER);
        $result = $stmt->execute();
        $correctAnswer = $result->fetchArray(SQLITE3_ASSOC)['Correct'];

        if ($_SESSION['answer_' . $i] === $correctAnswer) {
            $totalCorrect++;
        }
    }

    echo "<p>Quiz completed! Your score: $score out of $totalQuestions</p>";
    echo "<p>Total Correct Answers: $totalCorrect</p>";

    // Add any additional processing or database updates here if needed
}

// Clear session data
session_unset();
session_destroy();
