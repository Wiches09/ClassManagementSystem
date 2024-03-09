<?php
include 'connectdatabase.php';

$sqlStudent = "SELECT COUNT(*) as count FROM user WHERE role = 'student'";
$resultStudent = mysqli_query($conn, $sqlStudent);
$rowStudent = mysqli_fetch_assoc($resultStudent);

$sqlTeacher = "SELECT COUNT(*) as count FROM user WHERE role = 'teacher'";
$resultTeacher = mysqli_query($conn, $sqlTeacher);
$rowTeacher = mysqli_fetch_assoc($resultTeacher);

$sqlAcademic = "SELECT COUNT(*) as count FROM user WHERE role = 'academic'";
$resultAcademic = mysqli_query($conn, $sqlAcademic);
$rowAcademic = mysqli_fetch_assoc($resultAcademic);

mysqli_close($conn);
?>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <div class="p-6 relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
        <div class="rounded-t mb-0 px-0 border-0">
            <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Users</h3>
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Role</th>
                            <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Amount</th>
                            <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-gray-700 dark:text-gray-100">
                            <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Student</th>
                            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><?= $rowStudent['count'] ?></td>
                            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <div class="flex items-center">
                                    <span class="mr-2"><?= number_format(($rowStudent['count'] / ($rowStudent['count'] + $rowTeacher['count'] + $rowAcademic['count'])) * 100, 2) ?>%</span>
                                    <div class="relative w-full">
                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                            <div style="width: <?= number_format(($rowStudent['count'] / ($rowStudent['count'] + $rowTeacher['count'] + $rowAcademic['count'])) * 100, 2) ?>%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-100">
                            <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Teacher</th>
                            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><?= $rowTeacher['count'] ?></td>
                            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <div class="flex items-center">
                                    <span class="mr-2"><?= number_format(($rowTeacher['count'] / ($rowStudent['count'] + $rowTeacher['count'] + $rowAcademic['count'])) * 100, 2) ?>%</span>
                                    <div class="relative w-full">
                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                            <div style="width: <?= number_format(($rowTeacher['count'] / ($rowStudent['count'] + $rowTeacher['count'] + $rowAcademic['count'])) * 100, 2) ?>%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-600"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-100">
                            <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Academic</th>
                            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><?= $rowAcademic['count'] ?></td>
                            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <div class="flex items-center">
                                    <span class="mr-2"><?= number_format(($rowAcademic['count'] / ($rowStudent['count'] + $rowTeacher['count'] + $rowAcademic['count'])) * 100, 2) ?>%</span>
                                    <div class="relative w-full">
                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-green-200">
                                            <div style="width: <?= number_format(($rowAcademic['count'] / ($rowStudent['count'] + $rowTeacher['count'] + $rowAcademic['count'])) * 100, 2) ?>%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-600"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Activities</div>
            <div class="dropdown">
                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i class="ri-more-fill"></i></button>
                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                    <li>
                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="overflow-hidden">
            <table class="w-full min-w-[540px]">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex items-center">
                                <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Lorem Ipsum</a>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">02-02-2024</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">17.45</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex items-center">
                                <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Lorem Ipsum</a>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">02-02-2024</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">17.45</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>