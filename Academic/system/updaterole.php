<?php
include 'connectdatabase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST["user_id"];
    $role = $_POST["role"];

    if ($role === 'student') {
        $checkStudentSql = "SELECT COUNT(*) FROM student WHERE user_id = $user_id";
        $result = mysqli_query($conn, $checkStudentSql);
        $row = mysqli_fetch_assoc($result);

        if ($row['COUNT(*)'] == 0) {
            $insertStudentSql = "INSERT INTO student (user_id, role, gpa) VALUES ($user_id, 'student', 0)";
            mysqli_query($conn, $insertStudentSql);

            $updateUserSql = "UPDATE user SET role = 'student' WHERE user_id = $user_id";
            mysqli_query($conn, $updateUserSql);
        } else {
            echo "<script>alert('User is already a student');</script>";
            header("Location: ../addrole.php");
            exit();
        }
    } elseif ($role === 'teacher') {
        $checkTeachersql = "SELECT COUNT(*) FROM teacher WHERE user_id = $user_id";
        $result = mysqli_query($conn, $checkTeachersql);
        $row = mysqli_fetch_assoc($result);

        if ($row['COUNT(*)'] == 0) {
            $insertTeacherSql = "INSERT INTO teacher (user_id, role) VALUES ($user_id, 'teacher')";
            mysqli_query($conn, $insertTeacherSql);

            $updateUserSql = "UPDATE user SET role = 'teacher' WHERE user_id = $user_id";
            mysqli_query($conn, $updateUserSql);
        } else {
            echo "<script>alert('User is already a teacher');</script>";
            header("Location: ../addrole.php");
            exit();
        }
    } else {
        echo "<script>alert('Invalid role');</script>";
        exit();
    }

    header("Location: ../addrole.php");
    exit();
} else {
    echo "<script>alert('Invalid request');</script>";
}
mysqli_close($conn);
