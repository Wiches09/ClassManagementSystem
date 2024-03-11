<?php include 'connectdatabase.php';
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
        <div class="p-6">
            <div class="">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white border border-gray-100 shadow-md p-6 rounded-md lg:col-span-2 w-full">
                        <div class="flex flex-col lg:flex-row justify-between mb-4 items-start">
                            <div class="mx-auto bg-white p-8 border rounded-md shadow-md w-full">
                                <h2 class="text-2xl font-semibold mb-6">Post Page</h2>
                                <div class="flex flex-col lg:flex-row items-center gap-4  justify-center w-full">
                                    <div class="flex flex-col justify-center border rounded-md border-grey gap-6 w-full lg:w-3/4 h-full">
                                        <div class="flex p-4 bg-white rounded-3xl w-full h-fit">
                                            <!-- icon -->
                                            <div class="bg-[#136C94] rounded-full w-20 h-20 flex justify-center">
                                                <svg class="w-16 h-16 mt-2 text-white justify-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
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
                                    </div>
                                    <div class="flex flex-col justify-center self-start  border rounded-md border-grey gap-6 w-full lg:w-1/4 h-full">
                                        <div class="flex flex-col justify-center bg-white rounded-md shadow-lg p-6 w-full h-full">
                                            <span class="text-lg font-semibold ">Add An Announcement</span>

                                            <button data-modal-target="crud-modal-post" data-modal-toggle="crud-modal-post" class="block text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Add Lesson
                                            </button>
                                            
                                            <div class="w-full">
                                                <div class="grid grid-cols-2">
                                                    <h1 class="text-[#17A7CE] text-left text-2xl py-10">งานของฉัน</h1>

                                                    <!-- สถานะ -> ยังไม่ได้ส่ง/ส่งแล้ว/ขาดส่ง -->
                                                    <div class="flex justify-end w-full">
                                                        <h3 class="text-gray-400 text-right text-md pt-11">สถานะ</h3>
                                                    </div>
                                                </div>

                                                <!-- ปุ่มส่ง ทำเพิ่มใน JS ให้เปลี่ยนเป็นยกเลิก  -->
                                                

                                                <!-- cancle work -->
                                                <div class="flex w-full px-4 py-5">
                                                    <button type="reset" id="cancle" onclick="cancleUpload()" class="w-full border-4 h-[50px] border-gray-200 rounded-lg hover:bg-gray-200">
                                                        <h1 class="text-gray-400 text-2xl ">ยกเลิกการส่ง</h1>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <script type="module" src="component.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>