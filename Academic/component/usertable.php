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
                <div class="flex items-center mb-2">
                    <div class="text-xl font-semibold">Student</div>
                    <span class="p-1 rounded text-[12px] font-semibold bg-blue-500/10 text-blue-500 leading-none ml-2">
                        <?php
                        $sql = "SELECT COUNT(*) AS student_count FROM `user` WHERE `role` = 'student'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['student_count'];
                        ?>
                    </span>
                </div>
                <div class="flex flex-col justify-center items-center text-xs md:text-sm">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border p-2">User ID</th>
                                <th class="border p-2">First Name</th>
                                <th class="border p-2">Last Name</th>
                                <th class="border p-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `user` WHERE `role`  = 'student'";
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
                <div class="flex items-center mb-0.5">
                    <div class="text-xl font-semibold">Teacher</div>
                    <span class="p-1 rounded text-[12px] font-semibold bg-emerald-500/10 text-emerald-500 leading-none ml-1">
                        <?php
                        $sql = "SELECT COUNT(*) AS teacher_count FROM `user` WHERE `role` = 'teacher'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['teacher_count'];
                        ?>
                    </span>
                </div>
                <div class="flex flex-col justify-center items-center text-xs md:text-sm">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border p-2">User ID</th>
                                <th class="border p-2">First Name</th>
                                <th class="border p-2">Last Name</th>
                                <th class="border p-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `user` WHERE `role`  = 'teacher'";
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
                <div class="flex items-center mb-0.5">
                    <div class="text-xl font-semibold">User</div>
                    <span class="p-1 rounded text-[12px] font-semibold bg-rose-500/10 text-rose-500 leading-none ml-1">
                        <?php
                        $sql = "SELECT COUNT(*) AS user_count FROM `user` WHERE `role` = 'user'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['user_count'];
                        ?>
                    </span>
                </div>
                <div class="flex flex-col justify-center items-center text-xs md:text-sm">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border p-2">User ID</th>
                                <th class="border p-2">First Name</th>
                                <th class="border p-2">Last Name</th>
                                <th class="border p-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `user` WHERE `role` = 'user'";
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