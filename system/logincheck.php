<?php
include 'connectdatabase.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE user_id = '$username' AND password = '$password'";
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
            header("location: ../page/index.php");
            break;
        case 'teacher':
            header("location: ../page/index.php");
            break;
        case 'academic':
            header("location: ../Academic/dashboard.php");
            break;
        default:
            header("location: ../page/index.php");
            break;
    }
} else {
    echo "<script>alert('รหัสผ่าน หรือ ชื่อผู้ใช้งานไม่ตรงกัน');</script>";
    // header("location: ../page/login.php");
    echo "<script> window.location = '../page/login.php'; </script>";
}


$conn->close();
