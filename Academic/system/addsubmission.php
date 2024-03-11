<?php
include 'connectdatabase.php';
session_start();

if (isset($_GET['assignment_id'])) {
    $assignment_id = $_GET['assignment_id'];
    $user_id = $_SESSION['user_id'];

    if (is_uploaded_file($_FILES['assignmentfile']['tmp_name'])) {
        $assignmentfile = 'course_' . uniqid() . "." . pathinfo(basename($_FILES['assignmentfile']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "../system/imagecourse/" . $assignmentfile;
        move_uploaded_file($_FILES['assignmentfile']['tmp_name'], $image_upload_path);
    } else {
        $assignmentfile = "";
    }

    $checkSubmissionQuery = "SELECT * FROM submission WHERE assignment_id = '$assignment_id' AND student_id = '$user_id'";
    $checkSubmissionResult = mysqli_query($conn, $checkSubmissionQuery);

    if (mysqli_num_rows($checkSubmissionResult) > 0) {
        $updateSubmissionQuery = "UPDATE submission 
                                SET submit_file = '$assignmentfile', send_date = CURRENT_TIMESTAMP, status = 'submitted'
                                WHERE assignment_id = '$assignment_id' AND student_id = '$user_id'";
        $updateResult = mysqli_query($conn, $updateSubmissionQuery);

        if ($updateResult) {
            echo "Submission updated successfully";
        } else {
            echo "Error updating submission: " . mysqli_error($conn);
        }
    } else {
        $insertSubmissionQuery = "INSERT INTO submission (assignment_id, student_id, submit_file, send_date, score, status) 
                                VALUES ('$assignment_id', '$user_id', '$assignmentfile', CURRENT_TIMESTAMP, '0', 'submitted')";
        $insertResult = mysqli_query($conn, $insertSubmissionQuery);

        if ($insertResult) {
            echo "Submission successful";
        } else {
            echo "Error inserting submission: " . mysqli_error($conn);
        }
    }
} else {
    echo "No Submission successful";
}
