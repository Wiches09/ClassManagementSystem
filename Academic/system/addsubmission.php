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

    $sql = "INSERT INTO submission (assignment_id, user_id, submit_file, send_date, score) VALUES ('$assignment_id', '$user_id', '$assignmentfile', CURRENT_TIMESTAMP, '0')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Submission successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "No Submission successful";
}
