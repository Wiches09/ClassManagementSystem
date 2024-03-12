<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Information</title>
</head>

<body>
    <?php
    $url = "http://10.0.15.21/lab/lab12/restapis/10countries.json";
    $response = file_get_contents($url);

    if ($response) {
        $countries = json_decode($response, true);
        if (is_array($countries)) {
            foreach ($countries as $country) {
                echo "<h2>{$country['name']}</h2>";
                echo "<p>Capital: {$country['capital']}</p>";
                echo "<p>Population: {$country['population']}</p>";
                echo "<p>Region: {$country['region']}</p>";
                echo "<p>Latitude/Longitude: {$country['latlng'][0]}, {$country['latlng'][1]}</p>";
                echo "<p>Borders: " . implode(", ", $country['borders']) . "</p>";
                echo "<img src='{$country['flag']}' alt='Flag of {$country['name']}' width='100'>";
                echo "<hr>";
            }
        } else {
            echo "Error decoding JSON response.";
        }
    }
    ?>
</body>

</html>