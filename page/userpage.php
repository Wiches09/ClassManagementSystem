<?php
session_start();
include 'connectdatabase.php';
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


</head>

<body class="text-gray-800 font-inter">
  <!--sidenav -->
  <div id="sidenav-container"></div>
  <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
  <!-- end sidenav -->

  <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
    <!-- navbar -->
    <div id="navbar-container"></div>
    <!-- end navbar -->

    <!-- Content -->
    <div class="p-6">
      <div class="">
        <!-- main page -->
        <div class="grid grid-cols-2 gap-10 p-10 ">

          <!-- profile -->
          <div class="bg-[#136C94] w-full h-full rounded-2xl">
            <div class="flex justify-center mt-10">
              <!-- user img -->
              <div class="py-4 w-80 h-80 bg-black rounded-full overflow-hidden">
                <?php
                $user_id = $_SESSION["user_id"];
                $role = $_SESSION["role"];
                $sql = "SELECT * FROM user WHERE role = '$role' and user_id = $user_id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <img class="w-full h-full object-cover" src="../Academic/system/profilepictures/<?= $row['profile_picture'] ?>" alt="Profile Image" />
              </div>

            </div>

            <div class="text-center mb-10 text-[#FEFF86]">
              <h1 class="text-3xl py-2"><?= $row['firstname'] . " " . $row['lastname'] ?></h1>
              <h2 class="text-2xl py-2"><?= $row['user_id'] ?></h2>
              <h3 class="text-xl py-2"><?= $row['email'] ?></h3>
              <h4 class="text-lg py-2"><?= $row['role'] ?></h4>
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
                    <svg class="w-10 h-10 text-gray-800 dark:text-[#136C94]" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4" />
                    </svg>
                  </a>
                </div>

              </div>


              <div class="grid grid-cols-2 grid-rows-2  py-4 gap-5 w-full max-h-64">

                <!-- fetch class from db and show -->
                <?php
                //$sql = "SELECT * FROM user WHERE user_id = '$username' AND password = '$password'";
                // $result = mysqli_query($conn, $sql);
                //$row = mysqli_fetch_assoc($result);
                ?>

                <a href="class-page.php" class="hover:ring-4 ring-white rounded-md">
                  <div id="class1" class="bg-gradient-to-l from-[#FEFF86] to-[#17A7CE] rounded-md shadow-md">
                    <h1 class="text-xl p-3 text-ellipsis overflow-x-hidden ... text-white">ชื่อชั้นเรียน</h1>
                    <p class="text-l p-3 text-gray-600">ชื่อครู</p>
                  </div>
                </a>

                <a href="class-page.php" class="hover:ring-4 ring-white rounded-md">
                  <div id="class2" class="bg-gradient-to-l from-[#FEFF86] to-[#17A7CE] rounded-md shadow-md">
                    <h1 class="text-xl p-3 text-ellipsis overflow-x-hidden ... text-white">ชื่อชั้นเรียน</h1>
                    <p class="text-l p-3 text-gray-600">ชื่อครู</p>
                  </div>
                </a>

                <a href="class-page.php" class="hover:ring-4 ring-white rounded-md">
                  <div id="class3" class="bg-gradient-to-l from-[#FEFF86] to-[#17A7CE] rounded-md shadow-md">
                    <h1 class="text-xl p-3 text-ellipsis overflow-x-hidden ... text-white">ชื่อชั้นเรียน</h1>
                    <p class="text-l p-3 text-gray-600">ชื่อครู</p>
                  </div>
                </a>


                <a href="class-page.php" class="hover:ring-4 ring-white rounded-md">
                  <div id="class4" class="bg-gradient-to-l from-[#FEFF86] to-[#17A7CE] rounded-md shadow-md">
                    <h1 class="text-xl p-3 text-ellipsis overflow-x-hidden ... text-white">ชื่อชั้นเรียน</h1>
                    <p class="text-l p-3 text-gray-600">ชื่อครู</p>
                  </div>
                </a>

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


    </div>
    <!-- End Content -->
  </main>
  <script type="module" src="components.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>

  </script>



</body>

</html>