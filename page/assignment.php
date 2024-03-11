<?php
session_start();
var_dump($_SESSION);

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
<div id="navbar-container"></div>
  <div id="sidenav-container"></div>

  <!-- end nav -->
  <div class="mt-20 ml-60">

    <!-- subnav -->
    <?php
    if ($_SESSION['role'] == 'student') {
      echo '<div class="flex pl-40 mb-4 border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 w-full justify-center">
        <ul class="flex flex-wrap -mb-px text-2xl font-medium pl-10" id="default-tab"
          data-tabs-toggle="#default-tab-content" role="tablist">
          <li class="me-40" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="assigned-tab" data-tabs-target="#assigned"
              type="button" role="tab" aria-controls="assigned" aria-selected="false">ยังไม่ได้ส่ง</button>
          </li>
  
          <li class="me-40" role="presentation">
            <button
              class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
              id="missing-tab" data-tabs-target="#missing" type="button" role="tab" aria-controls="missing"
              aria-selected="false">เลยกำหนดส่ง</button>
          </li>
  
          <li class="me-40" role="presentation">
            <button
              class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
              id="done-tab" data-tabs-target="#done" type="button" role="tab" aria-controls="done"
              aria-selected="false">ส่งแล้ว</button>
          </li>
        </ul>
      </div>';
    } else if ($_SESSION['role'] == 'teacher') {
      echo '<div class="px-20 rounded-lg" id="assigned" role="tabpanel" aria-labelledby="assigned-tab">
      <!-- sort -->
      <div id="sort" class="flex float-right text-xl text-gray-900 px-20">
        <h1 class="text-2xl">จัดเรียง</h1>

        <div>
          <button type="button" class="flex text-sm rounded-md md:me-0 focus:ring-4 ml-10" id="filter-button"
            aria-expanded="false" data-dropdown-toggle="filter-dropdown" data-dropdown-placement="bottom">
            <svg class="w-10 h-10 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M5 3a2 2 0 0 0-1.5 3.3l5.4 6v5c0 .4.3.9.6 1.1l3.1 2.3c1 .7 2.5 0 2.5-1.2v-7.1l5.4-6C21.6 5 20.7 3 19 3H5Z" />
            </svg>
          </button>


          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg"
            id="filter-dropdown">
            <ul class="py-2" aria-labelledby="filter-button">
              <li class="px-2 text-2xl" id="sort-by-due"><button
                  class="text-[#136C94] hover:text-pink-600">เรียงตามวันเวลา</button></li>
              <li role="seperate" class="py-4">
                <hr class="border-[#136C94]">
              </li>
              <li class="px-2 text-2xl" id="sort-by-due"><button
                  class="text-[#136C94] hover:text-pink-600">เรียงตามชั้นเรียน</button></li>
            </ul>
          </div>
        </div>

      </div>


      <!-- assignments display -->
      <div class="grid grid-cols-3 gap-20 py-20">

        <!-- assignment 1 -->
        <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
          <div class="bg-[#136C94] rounded-md">
            <!-- icon -->
            <div class="flex justify-center pt-10 pb-4">
              <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
              </svg>
            </div>
            <!-- assignments name -->
            <div>
              <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
              <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
              <h1 class="text-2xl text-white text-center py-4">due date</h1>
              <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
            </div>
          </div>
        </a>

        <!-- assignment 2 -->
        <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
          <div class="bg-[#136C94] rounded-md">
            <!-- icon -->
            <div class="flex justify-center pt-10 pb-4">
              <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
              </svg>
            </div>
            <!-- assignments name -->
            <div>
              <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
              <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
              <h1 class="text-2xl text-white text-center py-4">due date</h1>
              <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
            </div>
          </div>
        </a>

        <!-- assignment 3 -->
        <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
          <div class="bg-[#136C94] rounded-md">
            <!-- icon -->
            <div class="flex justify-center pt-10 pb-4">
              <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
              </svg>
            </div>
            <!-- assignments name -->
            <div>
              <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
              <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
              <h1 class="text-2xl text-white text-center py-4">due date</h1>
              <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
            </div>
          </div>
        </a>

        <!-- assignment 4 -->
        <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
          <div class="bg-[#136C94] rounded-md">
            <!-- icon -->
            <div class="flex justify-center pt-10 pb-4">
              <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
              </svg>
            </div>
            <!-- assignments name -->
            <div>
              <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
              <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
              <h1 class="text-2xl text-white text-center py-4">due date</h1>
              <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
            </div>
          </div>
        </a>



      </div>




    </div>';
    }
    ?>


    <!-- assignment tabs -->
    <div id="default-tab-content">

      <!-- ยังไม่ได้ส่ง -->
      <div class="hidden px-20 rounded-lg" id="assigned" role="tabpanel" aria-labelledby="assigned-tab">
        <!-- sort -->
        <div id="sort" class="flex float-right text-xl text-gray-900 px-20">
          <h1 class="text-2xl">จัดเรียง</h1>

          <div>
            <button type="button" class="flex text-sm rounded-md md:me-0 focus:ring-4 ml-10" id="filter-button"
              aria-expanded="false" data-dropdown-toggle="filter-dropdown" data-dropdown-placement="bottom">
              <svg class="w-10 h-10 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M5 3a2 2 0 0 0-1.5 3.3l5.4 6v5c0 .4.3.9.6 1.1l3.1 2.3c1 .7 2.5 0 2.5-1.2v-7.1l5.4-6C21.6 5 20.7 3 19 3H5Z" />
              </svg>
            </button>


            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg"
              id="filter-dropdown">
              <ul class="py-2" aria-labelledby="filter-button">
                <li class="px-2 text-2xl" id="sort-by-due"><button
                    class="text-[#136C94] hover:text-pink-600">เรียงตามวันเวลา</button></li>
                <li role="seperate" class="py-4">
                  <hr class="border-[#136C94]">
                </li>
                <li class="px-2 text-2xl" id="sort-by-due"><button
                    class="text-[#136C94] hover:text-pink-600">เรียงตามชั้นเรียน</button></li>
              </ul>
            </div>
          </div>

        </div>


        <!-- assignments display -->
        <div class="grid grid-cols-3 gap-20 py-20">

          <!-- assignment 1 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 2 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 3 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 4 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>



        </div>




      </div>

      <!-- เลยกำหนดส่ง -->
      <div class="hidden rounded-lg px-20" id="missing" role="tabpanel" aria-labelledby="missing-tab">
        <!-- sort -->
        <div id="sort" class="flex float-right text-xl text-gray-900 px-20">
          <h1 class="text-2xl">จัดเรียง</h1>

          <div>
            <button type="button" class="flex text-sm rounded-md md:me-0 focus:ring-4 ml-10" id="filter-button-missing"
              aria-expanded="false" data-dropdown-toggle="filter-dropdown-missing" data-dropdown-placement="bottom">
              <svg class="w-10 h-10 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M5 3a2 2 0 0 0-1.5 3.3l5.4 6v5c0 .4.3.9.6 1.1l3.1 2.3c1 .7 2.5 0 2.5-1.2v-7.1l5.4-6C21.6 5 20.7 3 19 3H5Z" />
              </svg>
            </button>


            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg"
              id="filter-dropdown-missing">
              <ul class="py-2" aria-labelledby="filter-button-missing">
                <li class="px-2 text-2xl" id="sort-by-due"><button
                    class="text-[#136C94] hover:text-pink-600">เรียงตามวันเวลา</button></li>
                <li role="seperate" class="py-4">
                  <hr class="border-[#136C94]">
                </li>
                <li class="px-2 text-2xl" id="sort-by-due"><button
                    class="text-[#136C94] hover:text-pink-600">เรียงตามชั้นเรียน</button></li>
              </ul>
            </div>
          </div>

        </div>


        <!-- assignments display -->
        <div class="grid grid-cols-3 gap-20 py-20">

          <!-- assignment 1 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-red-500 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 2 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-red-500 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 3 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-red-500 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 4 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-red-500 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>



        </div>
      </div>

      <!-- ส่งแล้ว -->
      <div class="hidden rounded-lg px-20" id="done" role="tabpanel" aria-labelledby="done-tab">
        <!-- sort -->
        <div id="sort" class="flex float-right text-xl text-gray-900 px-20">
          <h1 class="text-2xl">จัดเรียง</h1>

          <div>
            <button type="button" class="flex text-sm rounded-md md:me-0 focus:ring-4 ml-10" id="filter-button-done"
              aria-expanded="false" data-dropdown-toggle="filter-dropdown-done" data-dropdown-placement="bottom">
              <svg class="w-10 h-10 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M5 3a2 2 0 0 0-1.5 3.3l5.4 6v5c0 .4.3.9.6 1.1l3.1 2.3c1 .7 2.5 0 2.5-1.2v-7.1l5.4-6C21.6 5 20.7 3 19 3H5Z" />
              </svg>
            </button>


            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg"
              id="filter-dropdown-done">
              <ul class="py-2" aria-labelledby="filter-button-done">
                <li class="px-2 text-2xl" id="sort-by-due"><button
                    class="text-[#136C94] hover:text-pink-600">เรียงตามวันเวลา</button></li>
                <li role="seperate" class="py-4">
                  <hr class="border-[#136C94]">
                </li>
                <li class="px-2 text-2xl" id="sort-by-due"><button
                    class="text-[#136C94] hover:text-pink-600">เรียงตามชั้นเรียน</button></li>
              </ul>
            </div>
          </div>

        </div>


        <!-- assignments display -->
        <div class="grid grid-cols-3 gap-20 py-20">

          <!-- assignment 1 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 2 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 3 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>

          <!-- assignment 4 -->
          <a href="work-page.php" class="hover:ring-4 ring-[#17A7CE] hover:opacity-85 rounded-md">
            <div class="bg-[#136C94] rounded-md">
              <!-- icon -->
              <div class="flex justify-center pt-10 pb-4">
                <svg class="w-20 h-20 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                </svg>
              </div>
              <!-- assignments name -->
              <div>
                <h1 class="text-3xl text-[#FEFF86] text-center py-4">ชื่องาน</h1>
                <h1 class="text-2xl text-white text-center py-4">ชื่อชั้นเรียน</h1>
                <h1 class="text-2xl text-white text-center py-4">due date</h1>
                <h1 class="text-2xl text-gray-300 text-right pt-20 pb-5 px-10">คะแนน</h1>
              </div>
            </div>
          </a>



        </div>
      </div>


    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>