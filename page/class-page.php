<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
      rel="stylesheet"
    />
</head>
<body class="bg-[#AFDAFF] flex flex-col w-full min-h-screen">
<div class="pb-20">
  <nav class="w-full fixed text-3xl">
<div class="absolute top-20 hidden w-60 bg-gray-900 shadow-xl z-50" id="navbar-hamburger">
  <ul class="font-medium mt-4 rounded-lg">
    <li>
      <a
        href="index.php"
        class="flex py-4 text-white hover:bg-gray-700 hover:text-white"
      >
        <label class="px-4">
          <svg
            class="w-10 h-10 text-white dark:text-white"
            aria-hidden="true"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5"
            />
          </svg>
        </label>
        หน้าแรก</a
      >
    </li>
    <li>
      <a
        href="assignment.php"
        class="flex py-4rounded text-white hover:bg-gray-700 hover:text-white"
      >
        <label class="px-4">
          <svg
            class="w-10 h-10 text-white dark:text-white"
            aria-hidden="true"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2"
            />
          </svg>
        </label>
        การบ้าน</a
      >
    </li>

    <li role="separator" class="pt-10">
      <hr class="border-gray-400" />
    </li>

    <li class="p-4 pt-9">
      <p class="text-[#AFDAFF]">ชั้นเรียนของฉัน</p>
    </li>

    <li>
      <a
        href="#"
        class="flex py-4 px-4 text-white rounded  dark:text-white md:hover:text-white hover:bg-gray-700 hover:text-white"
      >
        <label class="px-4">
            <svg class="w-10 h-10 text-white dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1"/>
            </svg>
        </label>
        ชั้นเรียน1</a
      >
    </li>
    <li>
        <a
        href="#"
        class="flex py-4 px-4 text-white rounded dark:text-white md:hover:text-white hover:bg-gray-700 hover:text-white"
      >
        <label class="px-4">
            <svg class="w-10 h-10 text-white dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1"/>
            </svg>
        </label>
        ชั้นเรียน2</a
      >
    </li>

    <li role="separator" class="py-10">
        <hr class="border-gray-400" />
    </li>
    
    <li class="pb-10">
        <a
        href="#"
        class="flex py-4 px-4 text-white rounded  dark:text-white md:hover:text-white hover:bg-gray-700 hover:text-white"
      >
        <label class="px-4">
            <svg class="w-10 h-10 text-white dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.1 1.9-.7-.7m5.6 5.6-.7-.7m-4.2 0-.7.7m5.6-5.6-.7.7M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            </svg>
        </label>
        การตั้งค่า</a
      >
    </li>
  </ul>
</div>
    <div class="bg-gray-900 shadow-xl absolute w-full">
    <div
      class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5"
    >
      <button
        data-collapse-toggle="navbar-hamburger"
        type="button"
        class="inline-flex items-center justify-center p-2 w-20 h-20 text-sm rounded-lg focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-10 h-10 text-white"
          aria-hidden="true"
          fill="none"
          viewBox="0 0 24 24"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-width="2"
            d="M5 7h14M5 12h14M5 17h14"
          />
        </svg>
      </button>

      <div class="flex">
        <div class="flex items-center justify-center px-10">
          <svg
            class="w-10 h-10 text-white"
            aria-hidden="true"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 5.4V3m0 2.4a5.3 5.3 0 0 1 5.1 5.3v1.8c0 2.4 1.9 3 1.9 4.2 0 .6 0 1.3-.5 1.3h-13c-.5 0-.5-.7-.5-1.3 0-1.2 1.9-1.8 1.9-4.2v-1.8A5.3 5.3 0 0 1 12 5.4ZM8.7 18c.1.9.3 1.5 1 2.1a3.5 3.5 0 0 0 4.6 0c.7-.6 1.3-1.2 1.4-2.1h-7Z"
            />
          </svg>
        </div>

        <div>
          <button
            type="button"
            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom"
          >
            <span class="sr-only">Open user menu</span>
            <img
              class="w-8 h-8 rounded-full"
              src="/docs/images/people/profile-picture-3.jpg"
              alt="user photo"
            />
          </button>
        </div>
      </div>
      <!-- Dropdown menu -->
      <div
        class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
        id="user-dropdown"
      >
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white"
            >Bonnie Green</span
          >
          <span
            class="block text-sm text-gray-500 truncate dark:text-gray-400"
            >name@flowbite.com</span
          >
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button"></ul>
      </div>
    </div>
    </div>
  

    <div class="mt-[120px] bg-gray-900">    
      <div>
        <ul class="px-4 py-2 flex justify-center" id="tabs" data-tabs-toggle="#tabs-content" role="tablist">  
          <li class="w-full flex justify-center">
            <button class="w-full text-white p-4 rounded focus:bg-[#AFDAFF] focus:text-gray-900 hover:text-red-400 shadow-md flex items-center justify-center"
            id="announcement-tab" data-tabs-target="#announcement" type="button" role="tab" aria-controls="announcement" aria-selected="false">
              <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
              ประกาศ
            </button>
          </li>
          <li class="w-full flex justify-center">
            <button class="w-full text-white p-4 rounded focus:bg-[#AFDAFF] focus:text-gray-900 hover:text-red-400 shadow-md flex items-center justify-center"
            id="classwork-tab" data-tabs-target="#classwork" type="button" role="tab" aria-controls="classwork" aria-selected="false">
              <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              งานของชั้นเรียน
            </button>
          </li>
          <li class="w-full flex justify-center">
            <button class="w-full text-white p-4 rounded focus:bg-[#AFDAFF] focus:text-gray-900 hover:text-red-400 shadow-md flex items-center justify-center"
            id="member-tab" data-tabs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false">
              <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
              </svg>
              สมาชิก
            </button>
          </li>
        </ul>
        
        
        
      </div>
    </div>
  </nav>
</div>
<!-- end nav -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>




<!-- main -->
<div class="w-full h-full mt-[140px] px-[100px]">


  <div id="tabs-content">

  <!-- announcement tab -->
    <div class="hidden px-20 rounded-lg" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
      
      
      <!-- class banner -->
      <div class="bg-gradient-to-l from-[#FEFF86] to-[#17A7CE] rounded-md">
        <div class="flex justify-end">
          <img src="../images/icon-banner-new.png" class="w-[200px] h-[200px] float-right p-2 mt-4 mr-20">
        </div>
        <h1 class="text-gray-900 text-left p-10 pt-[10px] text-3xl text-ellipsis overflow-x-hidden ...">ชื่อชั้นเรียน</h1>
      </div>
      
      <div class="flex py-5">

        <!-- announcement component -->
        <div>
          
          <!-- announcement 1 -->
            <div class="rounded-xl bg-white w-[900px] ring-1 ring-[#17A7CE] mb-6 mt-6">
              <div class="flex flex-wrap p-6">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94]">
                  <img src="../images/profile.jpg" class="rounded-full w-[60px] h-[60px]">
                </div> 
                <div class="px-4">
                  <h2 class="dark:text-gray-900 text-2xl">ชื่อคนประกาศ</h2>
                  <h3 class="text-gray-500 text-xl">วันเวลาที่ประกาศ</h3>
                </div>

                
              
              </div>


              <div role="separator" class="px-5 py-5">
                <hr class="border-[#17A7CE]">
              </div>


              <div class="">
                <div class="py-2 px-5 pb-7">
                  <p class="text-xl">สวัสดีครับ ท่านสมาชิกชมรม</p>
                </div>
              </div>
            </div>

          <!-- announcement 2 -->
            <div class="rounded-xl bg-white w-[900px] ring-1 ring-[#17A7CE] mb-6 mt-6">
              <div class="flex flex-wrap p-6">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94]">
                  <img src="../images/profile.jpg" class="rounded-full w-[60px] h-[60px]">
                </div> 
                <div class="px-4">
                  <h2 class="dark:text-gray-900 text-2xl">ชื่อคนประกาศ</h2>
                  <h3 class="text-gray-500 text-xl">วันเวลาที่ประกาศ</h3>
                </div>

              </div>


              <div role="separator" class="px-5 py-5">
                <hr class="border-[#17A7CE]">
              </div>


              <div class="">
                <div class="py-2 px-5 pb-7">
                  <p class="text-xl">สวัสดีครับ ท่านสมาชิกชมรม</p>
                </div>
              </div>
            </div>

          
          <!-- assignment -->
          <a href="work-page.php" class="mb-6 mt-6">
            <div class="rounded-xl bg-white w-[900px] ring-1 ring-[#17A7CE] mb-6 mt-6 flex hover:shadow-xl hover:bg-gray-200">

              <div class="p-6 flex">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94] bg-[#136C94]">
                  <svg class="w-[60px] h-[60px] text-white dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1"/>
                  </svg>
                </div>

                <div class="px-4">
                  <div class="flex">
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อคนประกาศ</h2>
                    <!-- white space -->
                    &ensp;
                    <h2 class="dark:text-gray-900 text-2xl">ได้เพิ่มงานใหม่แล้ว:</h2>
                    <!-- white space -->
                    &ensp;
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อการบ้าน</h2>
                  </div>
                  
                  <!-- date -->
                  <div>
                    <h3 class="text-gray-500 text-xl">วันเวลาที่เพิ่มงาน</h3>
                  </div>

                </div>
              </div>
            </div>
          </a>

          <!-- เนื้อหาประกอบการเรียนการสอน -->
          <a href="work-page.php" class="mb-6 mt-6">
            <div class="rounded-xl bg-white w-[900px] ring-1 ring-[#17A7CE] mb-6 mt-6 flex hover:shadow-xl hover:bg-gray-200">

              <div class="p-6 flex">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94] bg-[#136C94]">
                  <svg class="w-[60px] h-[60px] text-white dark:text-white" aria-hidden="true"  fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4c0-.6.4-1 1-1h12c.6 0 1 .4 1 1v13H7a2 2 0 0 0-2 2Zm0 0c0 1.1.9 2 2 2h12M9 3v14m7 0v4"/>
                  </svg>
                </div>

                <div class="px-4">
                  <div class="flex">
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อคนเพิ่มเนื้อหา</h2>
                    <!-- white space -->
                    &ensp;
                    <h2 class="dark:text-gray-900 text-2xl">ได้เพิ่มเนื้อหาใหม่แล้ว:</h2>
                    <!-- white space -->
                    &ensp;
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อเนื้อหา</h2>
                  </div>
                  
                  <!-- date -->
                  <div>
                    <h3 class="text-gray-500 text-xl">วันเวลาที่เพิ่มเนื้อหา</h3>
                  </div>

                </div>
              </div>
            </div>
          </a>

          <!-- quiz -->
          <a href="quiz-page.php" class="mb-6 mt-6">
            <div class="rounded-xl bg-white w-[900px] ring-1 ring-[#17A7CE] mb-6 mt-6 flex hover:shadow-xl hover:bg-gray-200">

              <div class="p-6 flex">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94] bg-[#136C94]">
                  <svg class="w-[60px] h-[60px] text-white dark:text-white" aria-hidden="true"  fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12c0 .6-.4 1-1 1h-2a1 1 0 0 1-1-1V5c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v14c0 .6.4 1 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
                  </svg>
                </div>

                <div class="px-4">
                  <div class="flex">
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อคนประกาศ</h2>
                    <!-- white space -->
                    &ensp;
                    <h2 class="dark:text-gray-900 text-2xl">ได้เพิ่มแบบทดสอบใหม่แล้ว:</h2>
                    <!-- white space -->
                    &ensp;
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อแบบทดสอบ</h2>
                  </div>
                  
                  <!-- date -->
                  <div>
                    <h3 class="text-gray-500 text-xl">วันเวลาที่เพิ่มแบบทดสอบ</h3>
                  </div>

                </div>
              </div>
            </div>
          </a>
          

        </div>

        <!-- add announcement component-->
        <div class="bg-white shadow-xl rounded-xl w-[400px] h-[400px] mt-5 ml-8">
          
          <div class="grid grid-cols-2 p-4 mt-10 gap-5">

            <div class="mt-10">
              <h1 class="text-gray-900 text-2xl">มาเพิ่มประกาศในชั้นเรียนกันเลย!</h1>
            </div>

            <div class="rounded-full w-[150px] h-[150px] ring-4 ring-[#136C94] flex justify-center shadow-2xl shadow-[#136C94]">
              <img src="../images/profile.jpg" class="rounded-full w-[150px] h-[150px]">
            </div>
          </div>

          <div class="p-5 flex justify-center mt-10">
            <a href="announcement-page.html">
              <button class="rounded-2xl bg-[#17A7CE] text-2xl w-[300px] h-[70px] text-white hover:ring-1 hover:ring-gray-600 hover:bg-[#136C94]">เพิ่มประกาศ</button>
            </a>
          </div>
        </div>
        
      </div>
      
    </div>



    <!-- classwork tab -->
    <div class="hidden px-20 rounded-lg justify-center" id="classwork" role="tabpanel" aria-labelledby="classwork-tab">
      <div class="flex justify-center w-full h-full">
        <div class="w-full h-full mt-[40px] px-[100px]">
          
          <!-- assignment -->
          <a href="work-page.php" class="mb-6 mt-6">
            <div class="rounded-xl bg-white ring-1 ring-[#17A7CE] mb-6 mt-6 flex hover:shadow-xl hover:bg-gray-200">

              <div class="p-6 flex">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94] bg-[#136C94]">
                  <svg class="w-[60px] h-[60px] text-white dark:text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1"/>
                  </svg>
                </div>

                <div class="px-4">
                  <div class="flex">
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อการบ้าน</h2>
                  </div>
                  
                  <!-- date -->
                  <div>
                    <h3 class="text-gray-500 text-xl">วันเวลาที่เพิ่มงาน</h3>
                  </div>

                </div>
              </div>
            </div>
          </a>

          <!-- เนื้อหาประกอบการเรียนการสอน -->
          <a href="work-page.php" class="mb-6 mt-6">
            <div class="rounded-xl bg-white ring-1 ring-[#17A7CE] mb-6 mt-6 flex hover:shadow-xl hover:bg-gray-200">

              <div class="p-6 flex">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94] bg-[#136C94]">
                  <svg class="w-[60px] h-[60px] text-white dark:text-white" aria-hidden="true"  fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4c0-.6.4-1 1-1h12c.6 0 1 .4 1 1v13H7a2 2 0 0 0-2 2Zm0 0c0 1.1.9 2 2 2h12M9 3v14m7 0v4"/>
                  </svg>
                </div>

                <div class="px-4">
                  <div class="flex">
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อเนื้อหา</h2>
                  </div>
                  
                  <!-- date -->
                  <div>
                    <h3 class="text-gray-500 text-xl">วันเวลาที่เพิ่มเนื้อหา</h3>
                  </div>

                </div>
              </div>
            </div>
          </a>

          <!-- quiz -->
          <a href="quiz-page.php" class="mb-6 mt-6">
            <div class="rounded-xl bg-white ring-1 ring-[#17A7CE] mb-6 mt-6 flex hover:shadow-xl hover:bg-gray-200">

              <div class="p-6 flex">
                <div class="rounded-full w-[60px] h-[60px] ring-4 ring-[#136C94] bg-[#136C94]">
                  <svg class="w-[60px] h-[60px] text-white dark:text-white" aria-hidden="true"  fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12c0 .6-.4 1-1 1h-2a1 1 0 0 1-1-1V5c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v14c0 .6.4 1 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
                  </svg>
                </div>

                <div class="px-4">
                  <div class="flex">
                    <h2 class="dark:text-gray-900 text-2xl">ชื่อแบบทดสอบ</h2>
                  </div>
                  
                  <!-- date -->
                  <div>
                    <h3 class="text-gray-500 text-xl">วันเวลาที่เพิ่มแบบทดสอบ</h3>
                  </div>

                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- member tab -->
    <div class="hidden px-20 rounded-lg" id="member" role="tabpanel" aria-labelledby="member-tab">
      <div class="flex justify-center">
        <div class="w-full h-full px-[100px] bg-white">
          <!-- teacher -->
          <div>
            <div class="mt-20 mb-10">
              <h1 class="text-[#17A7CE] text-4xl">ครู</h1>
            </div>

            <div class="mb-10">
              <hr class="border-[#17A7CE]">
            </div>

            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
          </div>
          <!-- student -->
          <div>
            <div class="mt-20 mb-10 grid grid-cols-2">
              <h1 class="text-[#17A7CE] text-4xl">นักเรียน</h1>
              <!-- จำนวนนักเรียนในชั้นเรียน -->
              <div class="flex justify-end mt-2">
                <h1 class="text-[#17A7CE] text-2xl">xx</h1>
                &ensp;
                <h1 class="text-[#17A7CE] text-2xl">คน</h1>
              </div>
              
            </div>

            <div class="mb-10">
              <hr class="border-[#17A7CE]">
            </div>

            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
            <!-- member -->
            <div>
              <div class="flex ml-20 h-full w-full">
                <div class="rounded-full w-[50px] h-[50px] ring-4 ring-[#136C94] mr-5">
                  <img src="../images/profile.jpg" class="rounded-full w-[50px] h-[50px]">
                </div>

                <div class="mt-1">
                  <h1 class="text-gray-900 text-2xl">ชื่อ</h1>
                </div>

                
              </div>
              
              <div class="mb-5 mt-5 px-6">
                <hr class="border-gray-300">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>



</body>
</html>