<?php
session_start();
// var_dump($_SESSION);
include 'connectdatabase.php';
if (!isset($_SESSION['login'])) {
  header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script type="module" src="./components.js"></script>
</head>

<body class="bg-[#AFDAFF] flex flex-col w-full min-h-screen">
  <!-- end nav -->
  <div id="navbar-container"></div>
  <div id="sidenav-container"></div>



  <div class="mt-20 ml-60">
    <!-- class display -->
    <div id="main-page" class="grid grid-cols-3 gap-28 p-32 -mt-12">
      <?php
      $user_id = $_SESSION["user_id"];
      $role = $_SESSION['role'];

      $sql = "";
      if ($role == 'student') {
        $sql = "SELECT u.firstname, u.lastname, u.user_id, t.teacher_id, c.course_name
                  FROM teacher t
                  INNER JOIN teacher_subject ts ON ts.teacher_id = t.teacher_id
                  INNER JOIN course c ON c.course_id = ts.course_id
                  INNER JOIN student_subject ss ON ss.course_id = ts.course_id
                  INNER JOIN student s ON s.student_id = ss.student_id
                  INNER JOIN user u on u.user_id = s.user_id
                  WHERE s.user_id = $user_id";
      } else if ($role == 'teacher') {
        $sql = "SELECT u.firstname, u.lastname, u.user_id, t.teacher_id, c.course_name
                  FROM teacher t
                  INNER JOIN user u ON t.user_id = u.user_id
                  INNER JOIN teacher_subject ts ON ts.teacher_id = t.teacher_id
                  INNER JOIN course c ON ts.course_id = c.course_id
                  WHERE t.user_id = $user_id";
      }

      // echo "Generated SQL query: " . $sql . "<br>"; // Print the generated SQL query for debugging
      
      if (!empty($sql)) {
        $result = mysqli_query($conn, $sql);

        $count = 0;

        // Display user's classes with course names
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<a class="rounded-3xl hover:ring-4 ring-[#17A7CE] hover:opacity-85 hover:-z-10">
        <div class="bg-white rounded-3xl shadow-xl">
          <div>
            <h1 class="text-[#136C94] text-3xl text-center py-20">' . $row['course_name'] . '</h1>
          </div>
          <div>
            <h3 class="text-gray-900 text-xl text-left p-5 py-10 pt-[200px]">' . $row["firstname"] . " " . $row["lastname"] . '</h3>
          </div>
        </div>
      </a>';
        }
      } else {
        echo "Unknown role";
      }
      ?>

    </div>
  </div>
</body>

</html>