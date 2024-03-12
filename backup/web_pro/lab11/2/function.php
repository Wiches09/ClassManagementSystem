<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('customers.db');
    }
}

// Open Database
$db = new MyDB();
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    // echo "Opened database successfully<br>";
}

$tableName = 'Customers';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['employee_id'];
    $submit = $_POST['submit'];

    if ($submit == 'show') {
        $sql = "SELECT * FROM $tableName WHERE CustomerId = 1";
        $stmt = $db->prepare($sql);
        $stmt->bindValue('1', $id, SQLITE3_TEXT);
        $result = $stmt->execute();

        $employeeData = $result->fetchArray(SQLITE3_ASSOC);

        if ($employeeData) {
            setcookie("CustomerId", $employeeData['CustomerId'], time() + (86400 * 30), "/"); // Set the cookie for 30 days
            setcookie("FirstName", $employeeData['FirstName'], time() + (86400 * 30), "/");
            setcookie("LastName", $employeeData['LastName'], time() + (86400 * 30), "/");
            setcookie("Address", $employeeData['Address'], time() + (86400 * 30), "/");
            setcookie("Email", $employeeData['Email'], time() + (86400 * 30), "/");
            setcookie("Phone", $employeeData['Phone'], time() + (86400 * 30), "/");
            echo "<script>window.location='index.php'; </script>";
            var_dump($_COOKIE);
        } else {
            echo "No data found for the provided Customer ID.";
        }
    } elseif ($submit == 'clear') {
        setcookie("CustomerId", "", time() - 3600, "/"); // Expire the cookie
        setcookie("FirstName", "", time() - 3600, "/");
        setcookie("LastName", "", time() - 3600, "/");
        setcookie("Address", "", time() - 3600, "/");
        setcookie("Email", "", time() - 3600, "/");
        setcookie("Phone", "", time() - 3600, "/");
        echo "<script>window.location='index.php'; </script>";
    } elseif ($submit == 'update') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "UPDATE $tableName SET FirstName = ?, LastName = ?, Address = ?, Email = ?, Phone = ? WHERE CustomerId = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $firstname, SQLITE3_TEXT);
        $stmt->bindValue(2, $lastname, SQLITE3_TEXT);
        $stmt->bindValue(3, $address, SQLITE3_TEXT);
        $stmt->bindValue(4, $email, SQLITE3_TEXT);
        $stmt->bindValue(5, $phone, SQLITE3_TEXT);
        $stmt->bindValue(6, $id, SQLITE3_TEXT);
        $result = $stmt->execute();

        if ($result) {
            echo "Employee information updated successfully.";
            echo "<script>window.location='index.php'; </script>";
        } else {
            echo "Failed to update employee information.";
        }
    }
}

$db->close();
