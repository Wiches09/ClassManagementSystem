<?php
include 'connectdatabase.php';

$CourseID = $_GET['Course_id'];
$CourseTitle = $_GET['CourseTitle'];
$DeptName = $_GET['DeptName'];
$Credits = $_GET['Credits'];
$action = $_GET['action'];

if ($action == "Update") {
    $sql = "UPDATE course SET course_id = '$CourseID', title = '$CourseTitle', dept_name = '$DeptName', credit = '$Credits' WHERE course_id = '$CourseID'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Update Successful');</script>";
        echo "<script>window.location='index.php'; </script>";
    } else {
        echo "<script>alert('Update Failed');</script>";
        echo "<script>window.location='index.php'; </script>";
    }
} else if ($action == "Delete") {
    $sql = "DELETE FROM course WHERE course_id = '$CourseID'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Delete Successful');</script>";
        echo "<script>window.location='index.php'; </script>";
    } else {
        echo "<script>alert('Delete Failed');</script>";
        echo "<script>window.location='index.php'; </script>";
    }
}

mysqli_close($conn);
