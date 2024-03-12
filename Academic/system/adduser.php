<?php
include 'connectdatabase.php';
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../Academic/database/education.db');
    }
}
$db = new MyDB();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phonenum = $_POST['phonenum'];
$role = $_POST['role'];
$faculty = $_POST['faculty'];

$password = generateRandomPassword(10);

function generateRandomPassword($length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

if (is_uploaded_file($_FILES['profile_picture']['tmp_name'])) {
    $profile_picture = 'profile_' . uniqid() . "." . pathinfo(basename($_FILES['profile_picture']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "../system/profilepictures/" . $profile_picture;
    move_uploaded_file($_FILES['profile_picture']['tmp_name'], $image_upload_path);
} else {
    $profile_picture = "";
}

$sql = "INSERT INTO `user` (firstname, lastname, email, password, dob, gender, phonenum, profile_picture, role)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$firstname, $lastname, $email, $password, $dob, $gender, $phonenum, $profile_picture, $role]);

if ($stmt) {
    $user_id = $pdo->lastInsertId();

    if ($role === 'student') {
        $insertStudentSql = "INSERT INTO student (user_id, role, gpa, faculty) VALUES (?, 'student', 0, ?)";
        $stmtStudent = $pdo->prepare($insertStudentSql);
        $stmtStudent->execute([$user_id, $faculty]);

        $updateUserSql = "UPDATE user SET role = 'student' WHERE user_id = ?";
        $stmtUpdateUser = $pdo->prepare($updateUserSql);
        $stmtUpdateUser->execute([$user_id]);
    } elseif ($role === 'teacher') {
        $insertTeacherSql = "INSERT INTO teacher (user_id, role) VALUES (?, 'teacher')";
        $stmtTeacher = $pdo->prepare($insertTeacherSql);
        $stmtTeacher->execute([$user_id]);

        $updateUserSql = "UPDATE user SET role = 'teacher' WHERE user_id = ?";
        $stmtUpdateUser = $pdo->prepare($updateUserSql);
        $stmtUpdateUser->execute([$user_id]);
    } else {
        echo "<script>alert('Invalid role');</script>";
        exit();
    }

    echo "<script>alert('Data saved successfully.');</script>";
    echo "<script>window.location = '../course.php';</script>";
} else {
    echo "<script>alert('Failed to save data.');</script>";
    echo $stmt->errorInfo()[2];
}
?>