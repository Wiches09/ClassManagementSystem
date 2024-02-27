<?php
session_start();
if (isset($_SESSION["Error"])) {
    $error_message = $_SESSION["Error"];
    unset($_SESSION["Error"]);
}
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<body class="flex flex-col w-full min-h-screen">
    <div class="bg-[#820300] flex-1 relative flex flex-col">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>