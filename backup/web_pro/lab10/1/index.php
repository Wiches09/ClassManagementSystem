<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
    <div class="container mt-4">
        <div class="text-center">
            <h2>CUSTOMER</h2>
        </div>

        <?php
        // 1. Connect to Database 
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
            // echo "Opened database successfully<br>";
        }

        // 3. Query Execution
        $sql = "SELECT * From customers ";    // SQL Statements
        $ret = $db->query($sql);

        if ($ret) {
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered'>";
            echo "<thead class='thead-dark'>";
            echo "<tr><th>Customer ID</th><th>First Name</th><th>Address</th><th>Phone</th><th>Email</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['CustomerId'] . "</td>";
                echo "<td>" . $row['FirstName'] . $row['LastName'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            // echo "Operation done successfully<br>";
        } else {
            echo "Error executing the query: " . $db->lastErrorMsg();
        }
        // 4. Close database
        $db->close();
        ?>

        <div class="text-center mt-3 pb-8">
            <form action="delete.php" method="post">
                <button class="btn btn-danger" value="delete" type="submit">DELETE</button>

            </form>
        </div>
    </div>

</body>

</html>