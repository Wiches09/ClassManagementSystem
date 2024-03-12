<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('customers.db');
    }
}

// 2. Open Database 
$db = new MyDB();
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully<br>";
}

// 3. Delete last 20 rows
$sql = "DELETE FROM customers WHERE CustomerId IN (SELECT CustomerId FROM customers ORDER BY CustomerId DESC LIMIT 1)";
$ret = $db->query($sql);

if (!$ret) {
    echo "Error deleting data:";
    echo "<script>window.location='index.php'; </script>";
} else {
    echo "Deleted last successfully<br>";
    echo "<script>window.location='index.php'; </script>";
}

// 4. Close database
$db->close();
