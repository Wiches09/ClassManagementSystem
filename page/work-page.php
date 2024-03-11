<?php
session_start();
// var_dump($_SESSION);

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
  <script src="./cancle-upload.js"></script>
</head>

<body class="bg-[#AFDAFF] flex flex-col w-full min-h-screen">
<div id="navbar-container"></div>
  <div id="sidenav-container"></div>
  <!-- end nav -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


  <div class="mt-20 ml-60">
    <!-- main page -->
    <div class="flex pl-40 mb-4 border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 w-full justify-center">
      <ul class="flex flex-wrap -mb-px text-2xl font-medium pl-10" id="default-tab"
        data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-40" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="assigned-tab" data-tabs-target="#show-work"
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
    </div>

    <div class="flex justify-center p-20" id="show-work">

      <!-- assignment description -->
      <div class="flex p-4 bg-white rounded-3xl w-full h-fit">
        <!-- icon -->
        <div class="bg-[#136C94] rounded-full w-20 h-20 flex justify-center">
          <svg class="w-16 h-16 mt-2 text-white justify-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
          </svg>
        </div>


        <!-- assignment name -->
        <div class="w-full">
          <div>
            <h1 class="text-[#136C94] text-3xl px-10 pt-3">วิเคราะห์การสังเคราะห์แสงของกระต่าย</h1>
          </div>
          <div>
            <h2 class="text-gray-600 text-base px-10 pt-3 pb-2">นายยงงย ชาดาบาดา</h2>
          </div>
          <div>
            <hr class="border-[#17A7CE] pt-3">
          </div>

          <!-- assignment description -->
          <div>
            <p class="text-xl text-gray-900 px-10 mb-3">
              ถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบายถ่ายรูปพร้อมอธิบาย
            </p>
          </div>

        </div>
      </div>



      <!-- classwork -->
      <div class="bg-white shadow-lg flex rounded-3xl px-10 ml-10 w-[550px] h-[330px]">

        <div class="w-full">
          <div class="grid grid-cols-2">
            <h1 class="text-[#17A7CE] text-left text-2xl py-10">งานของฉัน</h1>

            <!-- สถานะ -> ยังไม่ได้ส่ง/ส่งแล้ว/ขาดส่ง -->
            <div class="flex justify-end w-full">
              <h3 class="text-gray-400 text-right text-md pt-11">สถานะ</h3>
            </div>
          </div>

          <!-- ปุ่มส่ง ทำเพิ่มใน JS ให้เปลี่ยนเป็นยกเลิก  -->
          <div class="flex w-full px-4">
            <label for="file"
              class="bg-[#136C94] rounded-xl w-full h-16 flex justify-center text-2xl text-white hover:opacity-90 hover:ring-4 ring-[#17A7CE]">
              <h1 class="mt-3 px-4">เพิ่มงาน</h1>
              <svg class="w-9 h-w-9 align-middle text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4c0 .6.4 1 1 1h14c.6 0 1-.4 1-1v-4c0-.6-.4-1-1-1h-2M8 9l4-5 4 5m1 8h0" />
              </svg>
            </label>
            <input type="file" id="file" style="visibility:hidden;" class="h-0 w-0">

            </input>
          </div>

          <!-- cancle work -->
          <div class="flex w-full px-4 py-5">
            <button type="reset" id="cancle" onclick="cancleUpload()"
              class="w-full border-4 h-[50px] border-gray-200 rounded-lg hover:bg-gray-200">
              <h1 class="text-gray-400 text-2xl ">ยกเลิกการส่ง</h1>
            </button>
          </div>
        </div>

      </div>
    </div>

  </div>
</body>

</html>