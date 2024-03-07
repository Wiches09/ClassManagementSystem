<?php
include 'connectdatabase.php';
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
        VALUES ('$firstname', '$lastname', '$email', '$password', '$dob', '$gender', '$phonenum', '$profile_picture', '$role')";

$result = mysqli_query($conn, $sql);

if ($result) {
    $user_id = mysqli_insert_id($conn);

    if ($role === 'student') {
        $insertStudentSql = "INSERT INTO student (user_id, role, gpa, faculty) VALUES ($user_id, 'student', 0, '$faculty')";
        mysqli_query($conn, $insertStudentSql);

        $updateUserSql = "UPDATE user SET role = 'student' WHERE user_id = $user_id";
        mysqli_query($conn, $updateUserSql);
    } elseif ($role === 'teacher') {
        $insertTeacherSql = "INSERT INTO teacher (user_id, role) VALUES ($user_id, 'teacher')";
        mysqli_query($conn, $insertTeacherSql);

        $updateUserSql = "UPDATE user SET role = 'teacher' WHERE user_id = $user_id";
        mysqli_query($conn, $updateUserSql);
    } else {
        echo "<script>alert('Invalid role');</script>";
        exit();
    }

    echo "<script>alert('Data saved successfully.');</script>";
    echo "<script> window.location = '../course.php'; </script>";
} else {
    echo "<script>alert('Failed to save data.');</script>";
    echo mysqli_error($conn);
}

mysqli_close($conn);
