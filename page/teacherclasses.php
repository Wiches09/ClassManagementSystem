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



  <div class="flex justify-center items-center mt-40">
    <!-- class display -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6 mx-auto">
      <?php
      $teacher_id = $_SESSION['teacher_id'];
      $sql = "SELECT * FROM teacher_subject 
INNER JOIN course ON course.course_id = teacher_subject.course_id
INNER JOIN teacher ON teacher.teacher_id = teacher_subject.teacher_id
INNER JOIN user ON user.user_id = teacher.user_id
WHERE teacher_subject.teacher_id =  $teacher_id";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
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
</body>

</html>