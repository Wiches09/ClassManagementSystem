<?php
session_start();
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
            $_SESSION["CustomerId"] = $employeeData['CustomerId'];
            $_SESSION["FirstName"] = $employeeData['FirstName'];
            $_SESSION["LastName"] = $employeeData['LastName'];
            $_SESSION["Address"] = $employeeData['Address'];
            $_SESSION["Email"] = $employeeData['Email'];
            $_SESSION["Phone"] = $employeeData['Phone'];
            echo "<script>window.location='index.php'; </script>";
            var_dump($_SESSION);
        } else {
            echo "No data found for the provided Customer ID.";
        }
    } elseif ($submit == 'clear') {
        unset($_SESSION["CustomerId"], $_SESSION["FirstName"], $_SESSION["LastName"], $_SESSION["Address"], $_SESSION["Email"], $_SESSION["Phone"]);
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
