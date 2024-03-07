<?php
session_start();
if (isset($_SESSION["Error"])) {
  $error_message = $_SESSION["Error"];
  unset($_SESSION["Error"]);
}
// var_dump($_SESSION);
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
  <div id="nav-side-container"></div>
  <!-- end nav -->




  <div class="mt-20 ml-60">
    <!-- main page -->s
    <div class="grid grid-cols-2 gap-10 p-10 ">

      <!-- profile -->
      <div class="bg-[#136C94] w-full h-full rounded-2xl">
        <div class="flex justify-center mt-10">
          <!-- user img -->
          <div class="py-4 w-80 h-80">
            <img class="w-max h-max rounded-full" src="../images/profile.jpg" alt="user photo" />
          </div>
        </div>

        <div class="text-center mb-10">
          <h1 class="text-3xl text-[#FEFF86] py-2">ชื่อ</h1>
          <h2 class="text-2xl text-white py-2">รหัสนักเรียน</h2>
          <h3 class="text-xl text-white py-2">อีเมล</h2>
            <h4 class="text-lg text-white py-2">ข้อมูลอื่นๆ</h2>
        </div>

        <div class="">

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


          <div class="grid grid-cols-2 grid-rows-2 py-4 gap-5">

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
            <h1 class="text-3xl text-gray-900 pb-5">ตารางเรียน</h1>
          </div>

          <div class="p-4 bg-white">calendar</div>

        </div>

      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>