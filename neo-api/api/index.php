<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';
error_reporting(0);

$endpoint = 'https://api.nasa.gov/neo/rest/v1/feed';
$apiKey = 'hrc3atoJeFtediaxpgh7I4Jh7fp7H3SuHkANxUTJ';

if (isset($_POST['submit'])) {
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
}

$client = new GuzzleHttp\Client();
$response = $client->request('GET', $endpoint, [
    'query' => [
        'start_date' => $startDate,
        'end_date' => $endDate,
        'api_key' => $apiKey
    ]
]);
$data = json_decode($response->getBody(), true);

$fastestAsteroid = null;
foreach ($data['near_earth_objects'] as $date => $asteroids) {
    foreach ($asteroids as $asteroid) {
        if (!$fastestAsteroid || $asteroid['close_approach_data'][0]['relative_velocity']['kilometers_per_hour'] > $fastestAsteroid['close_approach_data'][0]['relative_velocity']['kilometers_per_hour']) {
            $fastestAsteroid = $asteroid;
        }
    }
}

$nearestAsteroid = null;
foreach ($data['near_earth_objects'] as $date => $asteroids) {
    foreach ($asteroids as $asteroid) {
        if (!$nearestAsteroid || $asteroid['close_approach_data'][0]['miss_distance']['kilometers'] < $nearestAsteroid['close_approach_data'][0]['miss_distance']['kilometers']) {
            $nearestAsteroid = $asteroid;
        }
    }
}

$sumSize = 0;
$count = 0;
foreach ($data['near_earth_objects'] as $date => $asteroids) {
    foreach ($asteroids as $asteroid) {
        $sumSize += $asteroid['estimated_diameter']['kilometers']['estimated_diameter_max'];
        $count++;
    }
}
$avgSize = $sumSize / $count;


echo 'Fastest Asteroid: ' . $fastestAsteroid['name'] . ' (' . number_format($fastestAsteroid['close_approach_data'][0]['relative_velocity']['kilometers_per_hour']) . ' km/h)<br>';
echo 'Nearest Asteroid: ' . $nearestAsteroid['name'] . ' (' . number_format($nearestAsteroid['close_approach_data'][0]['miss_distance']['kilometers']) . ' km)<br>';
echo 'Average Size: ' . number_format($avgSize, 2) . ' km';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Asteroid Neo Stats</title>
</head>
<body>
    <h1>Asteroid Neo Stats</h1>
    <form method="POST" action="">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date"><br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>