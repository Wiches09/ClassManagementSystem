<?php
session_start();
if (isset($_SESSION["Error"])) {
    $error_message = $_SESSION["Error"];
    unset($_SESSION["Error"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../system/logincheck.php" method="POST">
        <label for="username">
            <h1>Username: </h1>
        </label>
        <input type="text" name="username" id="username">
        <label for="password">
            <h1>Password: </h1>
        </label>
        <input type="text" name="password" id="password"><br>
        <button type="submit">submit</button>
    </form>

</body>

</html>