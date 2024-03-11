<?php
session_start();
// var_dump($_SESSION);
include 'connectdatabase.php';
if (!isset($_SESSION['login'])) {
  header("Location: ./login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script type="module" src="./components.js"></script>
</head>

<body class="bg-[#AFDAFF] flex flex-col w-full min-h-screen">
  <div id="navbar-container"></div>
  <div id="sidenav-container"></div>
  <!-- end nav -->
  <div class="mt-20 ml-60">
    <!-- main page -->
    <div class="grid grid-cols-2 gap-10 p-10 ">

      <!-- profile -->
      <div class="bg-[#136C94] w-full h-full rounded-2xl">
        <div class="flex justify-center mt-10">
          <!-- user img -->
          <div class="py-4 w-80 h-80 bg-gray-900 mb-8 rounded-full overflow-hidden">
            <?php
            $user_id = $_SESSION["user_id"];
            $role = $_SESSION["role"];
            $sql = "SELECT * FROM user WHERE role = '$role' and user_id = $user_id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>
            <img class="w-full h-full object-cover"
              src="../Academic/system/profilepictures/<?= $row['profile_picture'] ?>" alt="Profile Image" />
          </div>

        </div>

        <div class="text-center mb-10 text-[#FEFF86]">
          <h1 class="text-3xl py-2">
            <?= $row['firstname'] . " " . $row['lastname'] ?>
          </h1>
          <h2 class="text-2xl py-2">
            <?= $row['user_id'] ?>
          </h2>
          <h3 class="text-xl py-2">
            <?= $row['email'] ?>
          </h3>
          <h4 class="text-lg py-2">
            <?= $row['role'] ?>
          </h4>
        </div>
      </div>
      <!-- classes & calendar -->
      <div class="grid grid-rows-3 gap-2 w-full h-full rounded-2xl">

        <!-- class -->
        <div class="w-full h-full">
          <div class="grid grid-cols-2">

            <div>
              <h1 class="text-3xl text-gray-900">ชั้นเรียนของฉัน</h1>
            </div>

            <div class="flex justify-end">
              <a href="classes.php" class="flex text-2xl text-[#136C94]">ดูชั้นเรียนทั้งหมด
                <svg class="w-10 h-10 text-gray-800 dark:text-[#136C94]" aria-hidden="true" fill="none"
                  viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m7 16 4-4-4-4m6 8 4-4-4-4" />
                </svg>
              </a>
            </div>

          </div>


          <div class="grid grid-cols-2 grid-rows-2  py-4 gap-5 w-full max-h-64">

            <!-- fetch class from db and show -->
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
                $count += 1;
                echo '
                        <a href="class-page.php" class="hover:ring-4 ring-white rounded-md">
                            <div id="class1" class="bg-gradient-to-l from-[#FEFF86] to-[#17A7CE] rounded-md shadow-md">
                                <h1 class="text-xl p-3 text-ellipsis overflow-x-hidden ... text-white">' . $row['course_name'] . '</h1>
                                <p class="text-l p-3 text-gray-600">' . $row["firstname"] . " " . $row["lastname"] . '</p>
                            </div>
                        </a>';
                if ($count >= 4) {
                  break;
                }
              }
            } else {
              echo "Unknown role";
            }


            ?>
          </div>
        </div>

        <!-- calendar -->
        <div class="w-full h-full">
          <div class="p-4 pb-10">
            <hr class="border-gray-800">
          </div>
          <div>
            <?php
            if ($_SESSION['role'] == 'student') {
              echo '<h1 class="text-3xl text-gray-900 pb-5">ตารางเรียน</h1>';
            } else if ($_SESSION['role'] == 'teacher') {
              echo '<h1 class="text-3xl text-gray-900 pb-5">ตารางสอน</h1>';
            }
            ?>
          </div>
          <div class="p-4 bg-white">calendar</div>

        </div>

      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>