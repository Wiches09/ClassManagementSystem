<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div>
    <form id="CourseForm" action="" method="get">
      <p>
        <label for="Number">Enter a record number:</label>
        <input type="text" id="Number" name="number" value="0" size="3" />
      </p>
      <input type="submit" value="Submit" />

    </form><br />
  </div>

  <?php

  include 'connectphpdata.php';

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['number'])) {
    $number = $_GET['number'];
    $sql = "SELECT * FROM course ORDER BY course_id LIMIT $number,1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "ID: " . $row["course_id"] . "<br> " . "Title: " . $row["title"] . "<br> " . "Department_name: " . $row["dept_name"] . "<br> " . "Credits: " . $row["credit"] . "<br>";
        }
      } else {
        echo "0 results";
      }
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    $conn->close();
  }
  ?>

</body>

</html>