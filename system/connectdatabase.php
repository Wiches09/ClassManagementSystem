<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education";


$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../Academic/database/education.db');
    }
}



?>