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
                            <div class="mx-auto bg-white border rounded-md shadow-md w-full">
                                <?php
                                $course_id = $_GET['course_id'];
                                $sql = "SELECT * FROM course WHERE course_id = '$course_id' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="relative">
                                        <img src="../Academic/system/imagecourse/<?= $row['course_image'] ?>" alt="Course Image" class="mb-4 rounded-md shadow-lg w-full h-52">


                                        <div class="flex flex-col items-start justify-end mb-4 gap-2 p-4 text-white border border-white bg-black bg-opacity-50">
                                            <h3 class="text-xl font-semibold"><?= $row['course_name'] ?></h3>
                                            <!-- <p class="text-gray-700"><?= $row['course_description'] ?></p> -->
                                        </div>
                                        <div class="flex flex-col lg:flex-row items-center gap-4  justify-center w-full">
                                            <div class="flex flex-col justify-center border rounded-md border-grey gap-6 w-full lg:w-1/4 h-full">
                                                <div class="flex flex-col justify-center bg-white rounded-md shadow-lg p-6 w-full h-full">
                                                    <span class="text-lg font-semibold ">Add An Announcement</span>
                                                    <button class="btn btn-primary">Create Announcement</button>
                                                </div>
                                                <!-- Modal toggle -->
                                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                    Add User
                                                </button>

                                                <!-- Main modal -->
                                                <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                    Add User
                                                                </h3>
                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <form class="p-4 md:p-5" id="roleForm" action="../Academic/system/addrolesubject.php?course_id=<?= $course_id ?>" method="POST">
                                                                <div class="grid gap-4 mb-4 grid-cols-2">
                                                                    <div class="col-span-2">
                                                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                                                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" onchange="toggleFields()">
                                                                            <option value="" disabled selected>Select Role</option>
                                                                            <option value="student">Student</option>
                                                                            <option value="teacher">Teacher</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-span-2 sm:col-span-1" id="studentField" style="display: none;">
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label for="Faculty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student Faculty</label>
                                                                            <select id="faculty" name="faculty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                                <option value="empty" selected>Select Faculty</option>
                                                                                <?php
                                                                                $sql = "SELECT * FROM faculty";
                                                                                $result = mysqli_query($conn, $sql);

                                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                                    echo '<option value="' . $row['faculty_id'] . '">' . $row['faculty_name'] . '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-span-2 hidden sm:col-span-1" id="studentYearField">
                                                                        <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                                                                        <input type="text" name="year" id="studentyear" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    </div>

                                                                    <div class="col-span-2 hidden sm:col-span-1" id="studentSecField">
                                                                        <label for="sec" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sec</label>
                                                                        <input type="text" name="section" id="studentsec" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    </div>
                                                                    <div class="col-span-2 hidden sm:col-span-1" id="studentSemesterField">
                                                                        <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                                                                        <input type="text" name="semester" id="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    </div>

                                                                    <div class="col-span-2 hidden sm:col-span-1" id="teacherSecField">
                                                                        <label for="sec" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sec</label>
                                                                        <input type="text" name="section" id="teachersec" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    </div>

                                                                    <div class="col-span-2 hidden sm:col-span-1" id="teacherYearField">
                                                                        <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                                                                        <input type="text" name="year" id="teacheryear" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    </div>

                                                                    <div class="col-span-2 hidden" id="teacherField">
                                                                        <label for="teacher" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teacher</label>
                                                                        <?php
                                                                        $sql = "SELECT * FROM teacher INNER JOIN user ON teacher.user_id = user.user_id";
                                                                        $result = mysqli_query($conn, $sql);

                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                        ?>
                                                                            <input type="checkbox" class="text-white" name="teacher_id[]" value="<?= $row['teacher_id'] ?>" id="<?= $row['firstname'] . $row['lastname'] ?>">
                                                                            <label class="text-white" for="<?= $row['firstname'] . $row['lastname'] ?>"><?= $row['firstname'] . ' ' . $row['lastname'] ?></label><br>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                </div>
                                                                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                    Submit
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="flex flex-col justify-center border rounded-md border-grey gap-6 w-full lg:w-3/4 h-full">
                                                <div class="flex flex-col justify-center bg-white rounded-md shadow-lg p-6 w-full h-full">
                                                    <p class="text-lg font-semibold mb-4">Other Section</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
    <script>
        function toggleFields() {
            var role = document.getElementById("category").value;
            var studentField = document.getElementById("studentField");
            var studentYearField = document.getElementById("studentYearField");
            var studentSecField = document.getElementById("studentSecField");
            var studentSemesterField = document.getElementById("studentSemesterField");
            var teacherSecField = document.getElementById("teacherSecField");
            var teacherField = document.getElementById("teacherField");
            var teacherYearField = document.getElementById("teacherYearField");

            studentField.style.display = "none";
            studentYearField.style.display = "none";
            studentSecField.style.display = "none";
            studentSemesterField.style.display = "none";
            teacherSecField.style.display = "none";
            teacherField.style.display = "none";
            teacherYearField.style.display = "none";

            if (role === "student") {
                studentField.style.display = "block";
                studentYearField.style.display = "block";
                studentSecField.style.display = "block";
                studentSemesterField.style.display = "block";
            } else if (role === "teacher") {
                teacherSecField.style.display = "block";
                teacherField.style.display = "block";
                teacherYearField.style.display = "block";
            }
        }
    </script>
    <script type="module" src="component.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>