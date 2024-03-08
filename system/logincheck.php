<?php
include 'connectdatabase.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE user_id = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if ($row > 0) {
    session_regenerate_id();
    $_SESSION["user_id"] = $row['user_id'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["firstname"] = $row['firstname'];
    $_SESSION["lastname"] = $row['lastname'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["loggedin"] = TRUE;
    $_SESSION["role"] = $row['role'];
    $show = header("location: ../page/index.php");
    $_SESSION['sid'] = $sesid;
} else {
    $_SESSION["Error"] = "<p> Your username or password is invalid </p>";
    $show = header("location: ../page/login.php");
}
$conn->close();
