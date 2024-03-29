<?php
include 'connectdatabase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = isset($_POST["category"]) ? $_POST["category"] : null;
    $courseId = isset($_POST["course"]) ? $_POST["course"] : null;

    if ($role !== null && $courseId !== null) {
        $secId = isset($_POST["section"]) ? $_POST["section"] : null;
        $year = isset($_POST["year"]) ? $_POST["year"] : null;
        $semester = isset($_POST["semester"]) ? $_POST["semester"] : null;

        if ($role === "teacher") {
            $teacherIds = isset($_POST["teacher_id"]) ? $_POST["teacher_id"] : null;

            if ($teacherIds !== null && is_array($teacherIds) && !empty($teacherIds)) {
                foreach ($teacherIds as $teacherId) {
                    $teachesQuery = "INSERT INTO teacher_subject (teacher_id, course_id, sec, year) 
                            VALUES ('$teacherId', '$courseId', '$secId', '$year')";
                    $result = mysqli_query($conn, $teachesQuery);

                    if (!$result) {
                        echo '<script>alert("Error inserting teacher with ID ' . $teacherId . ': ' . mysqli_error($conn) . '");</script>';
                        echo "<script> window.location = '../rolecourse.php'; </script>";
                    }
                }
            } else {
                echo '<script>alert("Error: Teacher IDs are not set!");</script>';
                echo "<script> window.location = '../rolecourse.php'; </script>";
            }
        } elseif ($role === "student") {
            $faculty = isset($_POST["faculty"]) ? $_POST["faculty"] : null;

            if ($faculty !== null) {
                $studentIdsQuery = "SELECT student_id FROM student WHERE faculty = '$faculty'";
                $studentIdsResult = mysqli_query($conn, $studentIdsQuery);

                if (mysqli_num_rows($studentIdsResult) > 0) {
                    while ($studentRow = mysqli_fetch_assoc($studentIdsResult)) {
                        $studentId = $studentRow['student_id'];
                        $enrollmentQuery = "SELECT * FROM student_subject WHERE student_id = '$studentId' AND course_id = '$courseId'";
                        $enrollmentResult = mysqli_query($conn, $enrollmentQuery);

                        if (mysqli_num_rows($enrollmentResult) == 0) {
                            $attendQuery = "INSERT INTO student_subject (student_id, course_id, sec, year, semester, grade ) 
                            VALUES ('$studentId', '$courseId', '$secId', '$year', '$semester', '0')";
                            $result = mysqli_query($conn, $attendQuery);

                            if (!$result) {
                                echo '<script>alert("Error inserting attendance record for student ID ' . $studentId . '");</script>';
                            }
                        } else {
                            echo '<script>alert("Student ID ' . $studentId . ' is already enrolled in this course.");</script>';
                            echo "<script> window.location = '../rolecourse.php'; </script>";
                        }
                    }
                } else {
                    echo '<script>alert("No students found for the selected faculty.");</script>';
                    echo "<script> window.location = '../rolecourse.php'; </script>";
                }
            } else {
                echo '<script>alert("Error: Faculty is not set!");</script>';
                echo "<script> window.location = '../rolecourse.php'; </script>";
            }
        }

        if (isset($result) && $result) {
            echo '<script>alert("Data inserted successfully!");</script>';
            echo "<script> window.location = '../rolecourse.php'; </script>";
        } elseif (isset($result)) {
            echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
        }
    } else {
        echo '<script>alert("Error: Role or Course ID is not set!");</script>';
    }
}
