<?php
session_start(); // เรียกใช้ session ที่เริ่มต้นไว้แล้ว

include 'connectdatabase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quiz_id = $_POST['quiz_id'];
    $user_id = $_SESSION['user_id'];

    $total_score = 0;
    $answered_questions = array();

    // ตรวจสอบคำตอบของข้อแรกก่อนที่จะทำการเพิ่มคะแนน
    $first_question_id = $_POST['question_id'][0];
    $first_question_answer = $_POST['answer_' . $first_question_id];
    $sql_first_question = "SELECT * FROM question WHERE question_id = '$first_question_id'";
    $result_first_question = mysqli_query($conn, $sql_first_question);
    $row_first_question = mysqli_fetch_assoc($result_first_question);

    if ($first_question_answer == $row_first_question['answer']) {
        $total_score += 1;
    }
    $answered_questions[] = $first_question_id;

    foreach ($_POST as $key => $value) {
        if (strpos($key, 'answer_') !== false) {
            $question_id = substr($key, strpos($key, "_") + 1);
            $answer = mysqli_real_escape_string($conn, $value);
            $sql_question = "SELECT * FROM question WHERE question_id = '$question_id'";
            $result_question = mysqli_query($conn, $sql_question);
            $row_question = mysqli_fetch_assoc($result_question);

            if (!empty($answer) && !in_array($question_id, $answered_questions)) {
                if ($answer == $row_question['answer']) {
                    $total_score += 1; // เพิ่มคะแนนเมื่อคำตอบถูกต้อง
                }
                $answered_questions[] = $question_id;
            }
        }
    }

    // ตรวจสอบว่าผู้ใช้ตอบคำถามทุกข้อหรือไม่
    $sql_total_questions = "SELECT COUNT(*) AS total_questions FROM question WHERE quiz_id = '$quiz_id'";
    $result_total_questions = mysqli_query($conn, $sql_total_questions);
    $row_total_questions = mysqli_fetch_assoc($result_total_questions);
    $total_questions = $row_total_questions['total_questions'];

    if (count($answered_questions) < $total_questions) {
        echo "Please answer all questions before submitting.";
    } else {
        $starttime = date('Y-m-d H:i:s');
        $endtime = date('Y-m-d H:i:s');
        $sql_attempts = "INSERT INTO attempts (total_score, starttime, endtime, quiz_id, student_id) 
                             VALUES ('$total_score', '$starttime', '$endtime', '$quiz_id', '$user_id')";

        if (mysqli_query($conn, $sql_attempts)) {
            $_SESSION['quiz_submitted'] = true; // เก็บค่า session เพื่อบ่งชี้ว่าผู้ใช้ได้ทำการส่งคำตอบแล้ว
            echo "Quiz submitted successfully.";
        } else {
            echo "Error: " . $sql_attempts . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
