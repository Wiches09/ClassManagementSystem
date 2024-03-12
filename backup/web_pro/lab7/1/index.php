<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <label for="multiplicand">Enter Multiplicand:</label>
            <input type="number" name="multiplicand" id="multiplicand" required>
            <button type="submit">Generate Table</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $multiplicand = $_POST["multiplicand"];
            echo "<h2>Multiplication Table for $multiplicand</h2>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 12; $i++) {
                $result = $multiplicand * $i;
                echo "<tr><td>$multiplicand x $i</td><td>$result</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>