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
  <!-- end nav -->
  <div id="nav-side-container"></div>



  <div class="mt-20 ml-60">
    <!-- class display -->
    <div id="main-page" class="grid grid-cols-3 gap-28 p-32 -mt-12">


      <!-- class1 -->
      <a class="rounded-3xl hover:ring-4 ring-[#17A7CE] hover:opacity-85 hover:-z-10">
        <div class="bg-white rounded-3xl shadow-xl">
          <div>
            <h1 class="text-[#136C94] text-3xl text-center py-20">ชื่อชั้นเรียน</h1>
          </div>
          <div>
            <h3 class="text-gray-900 text-xl text-left p-5 py-10 pt-[200px]">ชื่อครูผู้สอน</h3>
          </div>
        </div>
      </a>

      <!-- class2 -->
      <a class="rounded-3xl hover:ring-4 ring-[#17A7CE] hover:opacity-85 hover:-z-10">
        <div class="bg-white rounded-3xl shadow-xl">
          <div>
            <h1 class="text-[#136C94] text-3xl text-center py-20">ชื่อชั้นเรียน</h1>
          </div>
          <div>
            <h3 class="text-gray-900 text-xl text-left p-5 py-10 pt-[200px]">ชื่อครูผู้สอน</h3>
          </div>
        </div>
      </a>

      <!-- class3 -->
      <a class="rounded-3xl hover:ring-4 ring-[#17A7CE] hover:opacity-85 hover:-z-10">
        <div class="bg-white rounded-3xl shadow-xl">
          <div>
            <h1 class="text-[#136C94] text-3xl text-center py-20">ชื่อชั้นเรียน</h1>
          </div>
          <div>
            <h3 class="text-gray-900 text-xl text-left p-5 py-10 pt-[200px]">ชื่อครูผู้สอน</h3>
          </div>
        </div>
      </a>

      <!-- class4 -->
      <a class="rounded-3xl hover:ring-4 ring-[#17A7CE] hover:opacity-85 hover:-z-10">
        <div class="bg-white rounded-3xl shadow-xl">
          <div>
            <h1 class="text-[#136C94] text-3xl text-center py-20">ชื่อชั้นเรียน</h1>
          </div>
          <div>
            <h3 class="text-gray-900 text-xl text-left p-5 py-10 pt-[200px]">ชื่อครูผู้สอน</h3>
          </div>
        </div>
      </a>

      <!-- class5 -->
      <a class="rounded-3xl hover:ring-4 ring-[#17A7CE] hover:opacity-85 hover:-z-10">
        <div class="bg-white rounded-3xl shadow-xl">
          <div>
            <h1 class="text-[#136C94] text-3xl text-center py-20">ชื่อชั้นเรียน</h1>
          </div>
          <div>
            <h3 class="text-gray-900 text-xl text-left p-5 py-10 pt-[200px]">ชื่อครูผู้สอน</h3>
          </div>
        </div>
      </a>

      <!-- class6 -->
      <a class="rounded-3xl hover:ring-4 ring-[#17A7CE] hover:opacity-85 hover:-z-10">
        <div class="bg-white rounded-3xl shadow-xl">
          <div>
            <h1 class="text-[#136C94] text-3xl text-center py-20">ชื่อชั้นเรียน</h1>
          </div>
          <div>
            <h3 class="text-gray-900 text-xl text-left p-5 py-10 pt-[200px]">ชื่อครูผู้สอน</h3>
          </div>
        </div>
      </a>

    </div>
  </div>
</body>

</html>