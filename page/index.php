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
  <script type="module" src="../components.js"></script>
</head>

<body class="bg-[#AFDAFF] flex flex-col w-full min-h-screen">
  <div id="nav-side-container"></div>
  </div>

  <div class="pb-20">
    <nav class="w-full fixed text-3xl">
      <div class="absolute top-20 hidden w-60 dark:bg-gray-900 shadow-xl z-50" id="navbar-hamburger">
        <ul class="font-medium mt-4 rounded-lg">
          <li>
            <a href="index.php"
              class="flex py-4 px-4 text-white rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
              <label class="px-4">
                <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5" />
                </svg>
              </label>
              หน้าแรก</a>
          </li>
          <li>
            <a href="assignment.php"
              class="flex py-4 px-4 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">
              <label class="px-4">
                <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2" />
                </svg>
              </label>
              การบ้าน</a>
          </li>

          <li role="separator" class="pt-10">
            <hr class="border-gray-400" />
          </li>

          <li class="p-4 pt-9">
            <p class="text-[#AFDAFF]">ชั้นเรียนของฉัน</p>
          </li>

          <li>
            <a href="#"
              class="flex py-4 px-4 text-gray-900 rounded hover:bg-gray-100 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">
              <label class="px-4">
                <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </label>
              ชั้นเรียน1</a>
          </li>
          <li>
            <a href="#"
              class="flex py-4 px-4 text-gray-900 rounded hover:bg-gray-100 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">
              <label class="px-4">
                <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </label>
              ชั้นเรียน2</a>
          </li>

          <li role="separator" class="py-10">
            <hr class="border-gray-400" />
          </li>

          <li class="pb-10">
            <a href="#"
              class="flex py-4 px-4 text-gray-900 rounded hover:bg-gray-100 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">
              <label class="px-4">
                <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2"
                    d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.1 1.9-.7-.7m5.6 5.6-.7-.7m-4.2 0-.7.7m5.6-5.6-.7.7M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
              </label>
              การตั้งค่า</a>
          </li>
        </ul>
      </div>
      <div class="dark:bg-gray-900 shadow-xl absolute w-full">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
          <button data-collapse-toggle="navbar-hamburger" type="button"
            class="inline-flex items-center justify-center p-2 w-20 h-20 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open main menu</span>
            <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
          </button>

          <div class="flex">
            <div class="flex items-center justify-center px-10">
              <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 5.4V3m0 2.4a5.3 5.3 0 0 1 5.1 5.3v1.8c0 2.4 1.9 3 1.9 4.2 0 .6 0 1.3-.5 1.3h-13c-.5 0-.5-.7-.5-1.3 0-1.2 1.9-1.8 1.9-4.2v-1.8A5.3 5.3 0 0 1 12 5.4ZM8.7 18c.1.9.3 1.5 1 2.1a3.5 3.5 0 0 0 4.6 0c.7-.6 1.3-1.2 1.4-2.1h-7Z" />
              </svg>
            </div>

            <div>
              <button type="button"
                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo" />
              </button>
            </div>
          </div>
          <!-- Dropdown menu -->
          <div
            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
            id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
              <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button"></ul>
          </div>
        </div>
      </div>

    </nav>
  </div>
  <!-- end nav -->





  <!-- main page -->
  <div class="grid grid-cols-2 gap-10 p-10 pt-20">

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>