<?php
include 'connectdatabase.php';
session_start();

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    session_regenerate_id();
    $_SESSION["user_id"] = $row['user_id'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["firstname"] = $row['firstname'];
    $_SESSION["lastname"] = $row['lastname'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["loggedin"] = true;
    $_SESSION["role"] = $row['role'];
    $_SESSION["profile_picture"] = $row['profile_picture'];
    $_SESSION["login"] = true;

    // add default pic for no profile image user but not finish yet
    // if (empty($_SESSION["profile_picture"])) {
    //     echo "<script>console.log('no pic');</script>";
    // }

    switch ($_SESSION["role"]) {
        case 'student':
            $studentQuery = "SELECT student_id FROM student WHERE user_id = '{$row['user_id']}'";
            $studentResult = mysqli_query($conn, $studentQuery);
            $studentRow = mysqli_fetch_assoc($studentResult);

            if ($studentRow) {
                $_SESSION["student_id"] = $studentRow['student_id'];
            }

            header("location: ../page/index.php");
            break;
        case 'teacher':
            $teacherQuery = "SELECT teacher_id FROM teacher WHERE user_id = '{$row['user_id']}'";
            $teacherResult = mysqli_query($conn, $teacherQuery);
            $teacherRow = mysqli_fetch_assoc($teacherResult);

            if ($teacherRow) {
                $_SESSION["teacher_id"] = $teacherRow['teacher_id'];
                header("location: ../page/teacherindex.php");
                break;
            }


        case 'academic':
            header("location: ../Academic/dashboard.php");
            break;
        default:
            header("location: ../page/studentindex.php");
            break;
    }
} else {
    echo "<script>alert('รหัสผ่าน หรือ ชื่อผู้ใช้งานไม่ตรงกัน');</script>";
    echo "<script> window.location = '../page/login.php'; </script>";
}


$conn->close();
