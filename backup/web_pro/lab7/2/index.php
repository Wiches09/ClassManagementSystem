<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar 2024</title>
    <style>
        #box {
            padding-top: 10%;
        }
    </style>
</head>

<body>
    <center>
        <div id="box">
            <form action="" method="POST">
                <label for="calendar">Calendar 2024</label>
                <select id="calendar" name="calendar">
                    <option value="Select Month">Select Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <button type="submit">Show Calendar</button>
            </form>
        </div>
        <center>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $DayOfMonth = array(
                    "January" => 31,
                    "February" => 29,
                    "March" => 31,
                    "April" => 30,
                    "May" => 31,
                    "June" => 30,
                    "July" => 31,
                    "August" => 31,
                    "September" => 30,
                    "October" => 31,
                    "November" => 30,
                    "December" => 31
                );
                $selectedMonth = isset($_POST["calendar"]) ? $_POST["calendar"] : "";
                $daysInMonth = $DayOfMonth[$selectedMonth] ?? 0;

                echo "<h2>Calendar for $selectedMonth 2024</h2>";
                echo "<table border='1'>";
                echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";

                $firstDayOfMonth = date("w", strtotime("1 $selectedMonth 2024"));
                echo "$firstDayOfMonth";
                $dayCount = 1;
                
                for ($i = 1; $i <= 6; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 7; $j++) {
                        if (($i == 1 && $j < $firstDayOfMonth) || $dayCount > $daysInMonth) {
                            echo "<td></td>";
                        } else {
                            echo "<td>$dayCount</td>";
                            $dayCount++;
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
        </center>
    </center>
</body>

</html>