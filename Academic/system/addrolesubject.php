<?php
include 'connectdatabase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $role = $_POST['role'];
    $tableName = 'teaches';

    if ($role == 'student') {
        $course_id = $_POST['course_id'];
        $grade = $_POST['year'];
        $room = $_POST['sec'];

        $sql = "INSERT INTO $tableName (course_id, year, sec) VALUES ('$course_id', '$grade', '$room')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } elseif ($role == 'teacher') {
        $course_id = $_POST['course_id'];
        $room = $_POST['sec'];

        $teacher_ids = $_POST['teacher_id'];
        $teacher_ids_str = implode(',', $teacher_ids);

        $sql = "INSERT INTO $tableName (course_id, teacher_id, sec) VALUES ('$course_id', '$teacher_ids_str', '$room')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
