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
                                <h2 class="text-2xl font-semibold mb-6">Add Role</h2>
                                <div class="flex flex-col justify-center items-center">
                                    <ol class="flex items-center w-full text-xs md:text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                                        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                                            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                                                <span class="me-1">1</span>
                                                วิชา <span class="hidden sm:inline-flex sm:ms-2"></span>
                                            </span>
                                        </li>
                                        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                                            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                                                <span class="me-1">2</span>
                                                สถานะ <span class="hidden sm:inline-flex sm:ms-2"></span>
                                            </span>
                                        </li>
                                        <li class="flex items-center">
                                            <span class="me-1">3</span>
                                            เซ็ค , อาจารย์
                                        </li>
                                    </ol>
                                </div>
                                <div class="flex flex-col justify-center items-center mt-16">

                                    <form action="your_action_page.php" method="post" class="w-full lg:col-span-1">
                                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                                            <div class="mb-4 flex">
                                                <label for="courseName" class="block text-sm font-medium text-gray-600">Course Name</label>
                                                <select id="courseName" name="courseName" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500" required>
                                                    <?php
                                                    $sql = "SELECT * FROM course";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?= $row['course_name'] ?>">
                                                            <?= $row['course_name'] ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-4 flex">
                                                <label for="role" class="block text-sm font-medium text-gray-600">role</label>
                                                <select id="role" name="role" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500" required>
                                                    <?php
                                                    $sql = "SELECT * FROM role";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?= $row['role_name'] ?>">
                                                            <?= $row['role_name'] ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-4 flex">
                                                <label for="teacher" class="block text-sm font-medium text-gray-600">Teachers</label>
                                                <select id="teacher" name="teacher[]" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500" multiple required>
                                                    <?php
                                                    $sql = "SELECT * FROM teacher 
                                                    INNER JOIN user ON teacher.user_id = user.user_id
                                                    WHERE teacher.role = user.role";
                                                    $result = mysqli_query($conn, $sql);

                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?= $row['firstname'] . $row['lastname'] ?>">
                                                            <?= $row['firstname'] . $row['lastname'] ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="mb-4 flex">
                                                <label for="student" class="block text-sm font-medium text-gray-600">student</label>
                                                <select id="student" name="student" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500" required>
                                                    <option value=" "> เลือกเซ็คของนักเรียน</option>
                                                    <option value=" 1"> 1</option>
                                                    <option value=" 2"> 2</option>
                                                    <option value=" 3"> 3</option>

                                                </select>
                                            </div>

                                            <!-- Add other form fields or buttons as needed -->

                                            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Submit</button>
                                    </form>

                                    <!-- Add other form fields or buttons for the remaining columns (lg:col-span-2) if needed -->

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