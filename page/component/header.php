<!-- <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head> -->
<div class="fixed grid grid-cols-3 dark:bg-gray-900 shadow-xl w-full h-20">
  <!-- <div
    class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto"
  > -->
  <div class="flex w-fit">
    <button data-collapse-toggle="navbar-hamburger" type="button"
      class="inline-flex items-center justify-center mx-5 my-5 w-fit h-fit text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open main menu</span>
      <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 25 25">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
      </svg>
    </button>
  </div>

  <div class="w-full"></div>

  <div class="flex">
    <div class="w-full"></div>
    <div class="flex items-center justify-center px-10">
      <svg class="w-10 h-10 text-gray-800 dark:text-white justify-center" aria-hidden="true" fill="none"
        viewBox="0 0 28 28">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 5.4V3m0 2.4a5.3 5.3 0 0 1 5.1 5.3v1.8c0 2.4 1.9 3 1.9 4.2 0 .6 0 1.3-.5 1.3h-13c-.5 0-.5-.7-.5-1.3 0-1.2 1.9-1.8 1.9-4.2v-1.8A5.3 5.3 0 0 1 12 5.4ZM8.7 18c.1.9.3 1.5 1 2.1a3.5 3.5 0 0 0 4.6 0c.7-.6 1.3-1.2 1.4-2.1h-7Z" />
      </svg>
    </div>

    <div class="flex mr-10 float-right items-center">
      <button type="button"
        class="flex justify-center items-center text-sm bg-gray-800 rounded-full ml-3 md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
        data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo" />
      </button>
    </div>

    <!-- Dropdown menu -->
    <div
      class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
      id="user-dropdown">
      <div class="px-4 py-3">
        <span class="block text-sm text-white dark:text-white">Bonnie Green</span>
        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
      </div>
      <ul class="py-2" aria-labelledby="user-menu-button"></ul>
    </div>
  </div>
</div>

<!-- sidebar -->
<div class="fixed left-0 top-0 w-60 h-full dark:bg-gray-900 p-4 z-50 sidebar-menu transition-transform text-white">
  <a href="#" class="flex items-center pb-4 h-20 justify-center">
    <h2 class="font-bold text-2xl">
      HOW TO <span class="bg-[#f84525] text-white px-2 rounded-md">LEARN</span>
    </h2>
  </a>
  <ul class="mt-4">
    <li class="mb-1 group">
      <a href="./index.php"
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5" />
        </svg>
        <i class="ri-home-2-line mr-3 text-lg"></i>
        <span class="text-base">หน้าแรก</span>
      </a>
    </li>
    <li class="mb-1 group">
      <a href=".././work-page.php"
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2" />
        </svg>
        <i class="bx bx-user mr-3 text-lg"></i>
        <span class="text-base">การบ้าน</span>

        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
      </a>

      <br class="leading-3" />
      <hr />
      <br class="leading-3" />

      <!-- วิชาที่มี -->

      <ul class="pl-7 mt-2 hidden group-[.selected]:block">
        <li class="mb-4">
          <a href="role.php"
            class="text-gray-700 text-base flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">View
            user</a>
        </li>
        <li class="mb-4">
          <a href="reg.php"
            class="text-sky-700 text-base flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Register
            user</a>
        </li>
      </ul>
    </li>
    <li class="mb-1 group">
      <a href=""
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
        <i class="w-6 h-6 pr-1">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M5 19V4c0-.6.4-1 1-1h12c.6 0 1 .4 1 1v13H7a2 2 0 0 0-2 2Zm0 0c0 1.1.9 2 2 2h12M9 3v14m7 0v4" />
          </svg>
        </i>

        <span class="text-base pl-1">Course</span>
        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
      </a>
      <ul class="pl-7 mt-2 hidden group-[.selected]:block">
        <li class="mb-4">
          <a href="course.php"
            class="text-sky-700 text-base flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create
            Course</a>
          <a href="course.php"
            class="text-white text-base flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
        </li>
        <li class="mb-4">
          <a href="regcourse.php"
            class="text-white text-base flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Course</a>
        </li>
        <li class="mb-4">
          <a href="rolecourse.php"
            class="text-white text-base flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Add
            Role</a>
        </li>
      </ul>
    </li>
    <li class="mb-1 group">
      <a href=""
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
        <i class="bx bx-list-ul mr-3 text-lg"></i>
        <span class="text-base">Activities</span>
      </a>
    </li>

    <br class="leading-3" />
    <hr />
    <br class="leading-3" />

    <li class="mb-1 group">
      <a href=""
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
        <i class="bx bx-bell mr-3 text-lg"></i>
        <span class="text-base">การตั้งค่า</span>
      </a>
    </li>
  </ul>
</div>
<!-- end nav -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>