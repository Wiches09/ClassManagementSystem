<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 8px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

</head>

<body>
    <form action="function.php" method="post">
        <center>
            <h3>Employee Information</h3>
        </center>
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" value="<?php echo isset($_SESSION['CustomerId']) ? $_SESSION['CustomerId'] : ''; ?>" placeholder="Enter employee ID">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo isset($_SESSION['FirstName']) ? $_SESSION['FirstName'] : ''; ?>" placeholder="Enter first name">
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo isset($_SESSION['LastName']) ? $_SESSION['LastName'] : ''; ?>" placeholder="Enter last name">
        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Enter address"><?php echo isset($_SESSION['Address']) ? $_SESSION['Address'] : ''; ?></textarea>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?>" placeholder="Enter email">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" value="<?php echo isset($_SESSION['Phone']) ? $_SESSION['Phone'] : ''; ?>" placeholder="Enter phone number">
        <br>
        <button type="submit" name="submit" value="show">Show Information</button>
        <button type="submit" name="submit" value="update">Update Information</button>
        <button type="submit" name="submit" value="clear">Clear Information</button>

    </form>




</body>

</html>