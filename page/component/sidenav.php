<?php
?>
<div class="fixed left-0 top-0 w-64 h-full bg-[#111827] text-white p-4 z-50 sidebar-menu transition-transform">
  <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
    <h2 class="font-bold text-2xl">
      HOW TO <span class="bg-[#f84525] text-white px-2 rounded-md">LEARN</span>
    </h2>
  </a>
  <ul class="mt-4">
    <li class="mb-1 group">
      <a href="../page/index.php"
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-white rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-white">
        <i class="ri-home-2-line mr-3 text-lg"></i>
        <span class="text-sm">หน้าหลัก</span>
      </a>
    </li>
    <li class="mb-1 group">
      <a href="../page/assignment.php"
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-white rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-white sidebar-dropdown-toggle">
        <i class="bx bx-user mr-3 text-lg"></i>
        <span class="text-sm">การบ้าน</span>
        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
      </a>
    </li>
    <hr />
    <li class="mb-1 group">
      <a href="../page/classes.php"
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-white rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-white sidebar-dropdown-toggle">
        <i class="w-6 h-6 pr-1">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M5 19V4c0-.6.4-1 1-1h12c.6 0 1 .4 1 1v13H7a2 2 0 0 0-2 2Zm0 0c0 1.1.9 2 2 2h12M9 3v14m7 0v4" />
          </svg>
        </i>

        <span class="text-sm pl-1">Class1</span>
        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
      </a>
    </li>
    <li class="mb-2 group">
      <a href="../"
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-white rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-white">
        <i class="bx bx-list-ul mr-3 text-lg"></i>
        <span class="text-sm">Class2</span>
      </a>
    </li>
    <hr>

    <li class="mb-1 mt-2 group">
      <a href=""
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-white rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-white">
        <i class="bx bx-bell mr-3 text-lg"></i>
        <span class="text-sm">การตั้งค่า</span>
      </a>
    </li>

    <li class="mb-1 group justify-end">
      <a href="../system/logout.php"
        class="flex font-semibold items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-white rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-white">
        <i class="bx bx-bell mr-3 text-lg"></i>
        <span class="text-sm">ล็อกเอาท์</span>
      </a>
    </li>
  </ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>