<?php
include 'connectdatabase.php';
?>


<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6 ">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2 w-full">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">USER</div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            <div class="rounded-md border border-dashed border-gray-200 p-4">
                <div class="flex flex-row md:flex-row items-center mb-2 justify-between">
                    <div class="text-xl font-semibold mb-2 md:mb-0 md:mr-2">
                        <span>Student</span>
                        <span class="p-1 rounded text-xs md:text-sm font-semibold bg-blue-500/10 text-blue-500 leading-none">
                            <?php
                            $sql = "SELECT COUNT(*) AS student_count FROM `user` WHERE `role` = 'student'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['student_count'];
                            ?>
                        </span>
                    </div>
                    <a href="../Academic/showstudent.php" class="py-1 px-5 me-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">more</a>
                </div>

                <div class="flex flex-col justify-center items-center text-xs md:text-sm overflow-x-auto">
                    <table class="w-full md:max-w-screen-md border-collapse">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border p-2">ID</th>
                                <th class="border p-2">First Name</th>
                                <th class="border p-2">Last Name</th>
                                <th class="border p-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `user` WHERE `role` = 'student' LIMIT 8";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td class='border p-2'>" . $row['user_id'] . "</td>";
                                echo "<td class='border p-2'>" . $row['firstname'] . "</td>";
                                echo "<td class='border p-2'>" . $row['lastname'] . "</td>";
                                echo "<td class='border p-2 font-bold text-blue-500'>" . $row['role'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="rounded-md border border-dashed border-gray-200 p-4">
                <div class="flex flex-row md:flex-row items-center mb-2 justify-between">
                    <div class="text-xl font-semibold mb-2 md:mb-0 md:mr-2  ">
                        <span>Teacher</span>
                        <span class="p-1 rounded text-xs md:text-sm font-semibold bg-red-500/10 text-red-500 leading-none">
                            <?php
                            $sql = "SELECT COUNT(*) AS teacher_count FROM `user` WHERE `role` = 'teacher'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['teacher_count'];
                            ?>
                        </span>

                    </div>
                    <a href="../Academic/showteacher.php" class="justify-self-end py-1 px-5 me-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">more</a>

                </div>
                <div class="flex flex-col justify-center items-center text-xs md:text-sm overflow-x-auto">
                    <table class="w-full md:max-w-screen-md border-collapse">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border p-2">ID</th>
                                <th class="border p-2">First Name</th>
                                <th class="border p-2">Last Name</th>
                                <th class="border p-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `user` WHERE `role` = 'teacher' LIMIT 8";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td class='border p-2'>" . $row['user_id'] . "</td>";
                                echo "<td class='border p-2'>" . $row['firstname'] . "</td>";
                                echo "<td class='border p-2'>" . $row['lastname'] . "</td>";
                                echo "<td class='border p-2 font-bold text-red-500'>" . $row['role'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rounded-md border border-dashed border-gray-200 p-4">
                <div class="flex flex-row md:flex-row items-center mb-2 justify-between">
                    <div class="text-xl font-semibold mb-2 md:mb-0 md:mr-2  ">
                        <span>Academic</span>
                        <span class="p-1 rounded text-xs md:text-sm font-semibold bg-emerald-500/10 text-emerald-500 leading-none">
                            <?php
                            $sql = "SELECT COUNT(*) AS user_count FROM `user` WHERE `role` = 'academic'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['user_count'];
                            ?>
                        </span>
                    </div>
                    <a href="../Academic/showacademic.php" class="justify-self-end py-1 px-5 me-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">more</a>

                </div>
                <div class="flex flex-col justify-center items-center text-xs md:text-sm overflow-x-auto">
                    <table class="w-full md:max-w-screen-md border-collapse">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border p-2">ID</th>
                                <th class="border p-2">First Name</th>
                                <th class="border p-2">Last Name</th>
                                <th class="border p-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `user` WHERE `role` = 'academic' LIMIT 8";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td class='border p-2'>" . $row['user_id'] . "</td>";
                                echo "<td class='border p-2'>" . $row['firstname'] . "</td>";
                                echo "<td class='border p-2'>" . $row['lastname'] . "</td>";
                                echo "<td class='border p-2 font-bold text-green-500'>" . $row['role'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div>
            <canvas id="order-chart"></canvas>
        </div>
    </div>

</div>