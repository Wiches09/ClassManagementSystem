<?php
session_start();
include 'connectdatabase.php';

$assignTitle = $_POST['assignTitle'];
$assignDescription = $_POST['assignDescription'];
$assignDate = $_POST['assignDate'];
$assignTime = $_POST['assignTime'];
$assignScore = $_POST['assignscore'];
$user_id = $_SESSION["user_id"];

$course_id = $_GET['course_id'];
$startDateTime = "{$assignDate} {$assignTime}";

if (is_uploaded_file($_FILES['assignFile']['tmp_name'])) {
    $assignFile = 'assignment_' . uniqid() . "." . pathinfo(basename($_FILES['assignFile']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "../system/assignmentfile/" . $assignFile;
    move_uploaded_file($_FILES['assignFile']['tmp_name'], $image_upload_path);
} else {
    $assignFile = "";
}

$materialQuery = "SELECT material_id FROM material WHERE material_name = 'ASSIGNMENT' AND course_id = '$course_id'";
$materialResult = mysqli_query($conn, $materialQuery);

if ($materialResult) {
    $materialRow = mysqli_fetch_assoc($materialResult);
    $material_id = $materialRow['material_id'];

    $insertQuery = "INSERT INTO assignment (assignment_title, description, file_attachment, start_date, due_date, total_score, user_id, course_id, material_id) 
                    VALUES (?, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $insertQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssisii", $assignTitle, $assignDescription, $assignFile, $startDateTime, $assignScore, $user_id, $course_id, $material_id);

        if (mysqli_stmt_execute($stmt)) {
            echo "Assignment inserted successfully!";
        } else {
            echo "Error executing prepared statement: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    echo "Error fetching material_id: " . mysqli_error($conn);
}

mysqli_close($conn);
