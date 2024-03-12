<?php
session_start();
// var_dump($_SESSION);
include 'connectdatabase.php';

if (!isset($_SESSION['login'])) {
  header("Location: ./login.php");
}
class MyDB extends SQLite3
{
  function __construct()
  {
    $this->open('../Academic/database/education.db');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="style.css" rel="stylesheet">
  <title>Admin Panel</title>
  <!-- <script type="module" src="./components.js"></script> -->
</head>

<body class="bg-[#AFDAFF] flex flex-col w-full min-h-screen">
  <!-- end nav -->
  <!-- <div id="navbar-container"></div> -->
  <div id="sidenav-container"></div>
  <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>

  <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-[#AFDAFF] min-h-screen transition-all main">
    <div id="navbar-container"></div>

    <div class="flex justify-center items-center mt-40">
      <!-- class display -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6 mx-auto">
        <?php
        $db = new MyDB();
        $teacher_id = $_SESSION['teacher_id'];
        $sql = "SELECT * FROM teacher_subject 
                INNER JOIN course ON course.course_id = teacher_subject.course_id
                INNER JOIN teacher ON teacher.teacher_id = teacher_subject.teacher_id
                INNER JOIN user ON user.user_id = teacher.user_id
                WHERE teacher_subject.teacher_id = $teacher_id";
        $result = $db->query($sql);

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
          ?>
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-500 hover:border-red-700">
            <a href="course_teacherpage.php?course_id=<?= $row['course_id'] ?>">
              <img src="../Academic/system/imagecourse/<?= $row['course_image'] ?>" class="w-full max-w-96 max-h-96 h-60">

              <div class="p-5 flex flex-col">
                <div>
                  <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <?= $row['course_name'] ?>
                    </h5>
                  </a>
                  <p class="mb-3 font-normal md:text-base text-xs text-gray-700 dark:text-gray-400">
                    <?= $row['course_description'] ?>
                  </p>
                </div>


              </div>
            </a>
          </div>
          <?php
        }
        mysqli_close($conn);
        ?>
      </div>
    </div>
  </main>
</body>
<script type="module" src="components.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</html>