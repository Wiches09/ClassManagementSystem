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
  <div id="nav-side-container"></div>
  <!-- end nav -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


  <div class="mt-20 ml-60">
    <!-- main page -->
    <div class="flex justify-center p-20">

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


          <div class="flex w-full px-4">
            <button
              class="bg-[#136C94] rounded-xl w-full h-16 flex justify-center text-2xl text-white hover:opacity-90 hover:ring-4 ring-[#17A7CE]">
              <svg class="w-9 h-w-9  align-middle text-gray-800 dark:text-white mt-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4c0 .6.4 1 1 1h14c.6 0 1-.4 1-1v-4c0-.6-.4-1-1-1h-2M8 9l4-5 4 5m1 8h0" />
              </svg>
              <h1 class="mt-3 px-4">เพิ่มงาน</h1>
            </button>
          </div>

          <!-- cancle work -->
          <div class="flex w-full px-4 py-5">
            <button class="w-full border-4 h-[50px] border-gray-200 rounded-lg hover:bg-gray-200">
              <h1 class="text-gray-400 text-2xl ">ยกเลิกการส่ง</h1>
            </button>
          </div>
        </div>

      </div>
    </div>

  </div>
</body>

</html>