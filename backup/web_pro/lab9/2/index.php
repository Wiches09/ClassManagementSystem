<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function fillForm(Course_id, title, deptName, credits) {
            document.getElementById('Course_id').value = Course_id;
            document.getElementById('CourseTitle').value = title;
            document.getElementById('DeptName').value = deptName;
            document.getElementById('Credits').value = credits;
        }
    </script>

</head>

<body>
    <div>
        <form id="CourseForm" action="updateForm.php" method="get">
            <p><label for='Course_id'>Course ID:</label>
                <input type="text" id="Course_id" name="Course_id" size="7" required />
            </p>
            <p><label for='CourseTitle'>Title:</label>
                <input type="text" id="CourseTitle" name="CourseTitle" size="25" required />
            </p>
            <p><label for='DeptName'>Department Name:</label>
                <select name="DeptName" id="DeptName">
                    <option value=""></option>
                    <option value="Biology">Biology</option>
                    <option value="Comp. Sci.">Comp. Sci.</option>
                    <option value="Elec. Eng.">Elec. Eng.</option>
                    <option value="Finance">Finance</option>
                    <option value="History">History</option>
                    <option value="Music">Music</option>
                    <option value="Physics">Physics</option>
                </select>
                <!-- <input type="text" id="DeptName" name="DeptName" required /> -->
            </p>
            <p><label for='Credits'>Credits:</label>
                <input type="text" id="Credits" name="Credits" size="3" required />
            </p>
            <input type="submit" name="action" value="Update">
            <input type="submit" name="action" value="Delete">
        </form>
    </div>
    <br />

    <?php
    include 'connectdatabase.php';

    $sql = "SELECT * FROM course ORDER BY course_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Course ID</th><th>Title</th><th>Dept_Name</th><th>Credits</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><a href='javascript:fillForm(\"" . $row["course_id"] . "\", \"" . $row["title"] . "\", \"" . $row["dept_name"] . "\", \"" . $row["credit"] . "\")'>" . $row["course_id"] . "</a></td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["dept_name"] . "</td>";
                echo "<td>" . $row["credit"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>

</html>