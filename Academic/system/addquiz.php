<?php
include 'connectdatabase.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $role = $_POST['role'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_attachment = $_POST['file_attachment'];
    $start_date = $_POST['start_date'];
    $due_date = $_POST['due_date'];
    $total_score = $_POST['total_score'];
    $teacher_id = $_SESSION['teacher_id'];
    $course_id = $_POST['role'];

    $materialQuery = "SELECT material_id FROM material WHERE material_name = 'Quiz' AND course_id = '$course_id'";
    $materialResult = mysqli_query($conn, $materialQuery);

    // เพิ่มข้อมูลลงในตาราง quiz
    if ($materialResult) {
        $materialRow = mysqli_fetch_assoc($materialResult);
        $material_id = $materialRow['material_id'];


        $sql = "INSERT INTO quiz (title, description, file_attachment, start_date, due_date, total_score, teacher_id, course_id, material_id)
        VALUES ('$title', '$description', '$file_attachment', '$start_date', '$due_date', '$total_score', '$teacher_id', '$course_id', '$material_id')";

        if (mysqli_query($conn, $sql)) {
            $quiz_id = mysqli_insert_id($conn);


            if (isset($_POST['question_title']) && isset($_POST['choices']) && isset($_POST['answers'])) {
                $question_titles = $_POST['question_title'];
                $choices = $_POST['choices'];
                $answers = $_POST['answers'];

                if (is_array($question_titles) && is_array($choices) && is_array($answers)) {

                    foreach ($question_titles as $key => $question_title) {
                        if (isset($question_titles[$key]) && isset($choices[$key]) && isset($answers[$key])) {
                            $question_title = mysqli_real_escape_string($conn, $question_title);
                            $answer = mysqli_real_escape_string($conn, $answers[$key]);
                            $choice_a = mysqli_real_escape_string($conn, $choices[$key][0] ?? '');
                            $choice_b = mysqli_real_escape_string($conn, $choices[$key][1] ?? '');
                            $choice_c = mysqli_real_escape_string($conn, $choices[$key][2] ?? '');
                            $choice_d = mysqli_real_escape_string($conn, $choices[$key][3] ?? '');
                            $sql_question = "INSERT INTO question (question_title, answer, quiz_id, question_a, question_b, question_c, question_d)
                             VALUES ('$question_title', '$answer', '$quiz_id', '$choice_a', '$choice_b', '$choice_c', '$choice_d')";
                            mysqli_query($conn, $sql_question);
                        } else {

                            echo "Error: Missing question data.";
                        }
                    }
                } else {
                    echo "Error: Data is not in the correct format.";
                }
            } else {
                echo "Error: Missing question data.";
            }

            echo "Quiz created successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
