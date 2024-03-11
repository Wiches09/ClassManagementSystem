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
        <!-- end navbar -->

        <!-- Content -->
        <div class="p-6">
            <div class="">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2 w-full">
                        <div class="flex justify-between mb-4 items-start">
                            <div class="font-medium text-xl">User</div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-collapse">
                                <thead>
                                    <tr>
                                        <th class="border p-2">User_id</th>
                                        <th class="border p-2">Firstname</th>
                                        <th class="border p-2">Lastname</th>
                                        <th class="border p-2">Email</th>
                                        <th class="border p-2">DOB</th>
                                        <th class="border p-2">Gender</th>
                                        <th class="border p-2">Phone Number</th>
                                        <!-- Uncomment the following line to display the Profile Image -->
                                        <!-- <th class="border p-2">Profile Image</th> -->
                                        <th class="border p-2">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `user` WHERE `role` = 'user'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $role = $row['role'];
                                    ?>
                                        <tr>
                                            <td class="border p-2 text-center"><?= $row['user_id'] ?></td>
                                            <td class="border p-2 text-center"><?= $row['firstname'] ?></td>
                                            <td class="border p-2 text-center"><?= $row['lastname'] ?></td>
                                            <td class="border p-2 text-center"><?= $row['email'] ?></td>
                                            <td class="border p-2 text-center"><?= $row['dob'] ?></td>
                                            <td class="border p-2 text-center"><?= $row['gender'] ?></td>
                                            <td class="border p-2 text-center"><?= $row['phonenum'] ?></td>

                                            <td class="border p-2 relative flex justify-center">
                                                <div class="flex-col flex  relative w-22">
                                                    <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        <path fill-rule="evenodd" d="M10 14a4 4 0 100-8 4 4 0 000 8z" clip-rule="evenodd" />
                                                    </svg>

                                                    </button>
                                                    <!-- HTML file -->
                                                    <ul id="roleOptions" class="absolute hidden text-gray-700 pt-8">
                                                        <li>
                                                            <form action="../Academic/system/updaterole.php" method="post">
                                                                <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                                                                <button type="submit" name="role" value="student" class="flex z-50 bg-blue-500 text-white px-1 py-1 text-sm hover:bg-gray-300" onclick="pro(this.href); return false;">Student</button>
                                                                <button type="submit" name="role" value="teacher" class="flex z-50 bg-red-500 text-white px-1 py-1 text-sm hover:bg-gray-300" onclick="pro(this.href); return false;">Teacher</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Content -->
    </main>
    <script type="module" src="component.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function pro(mypage) {
            var agree = confirm('คุณต้องการยืนยันหรือไม่');
            if (agree) {
                window.location = mypage1;
            }
        }
    </script>


</body>

</html>