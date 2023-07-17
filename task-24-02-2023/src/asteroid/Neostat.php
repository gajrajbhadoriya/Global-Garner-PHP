<?php

namespace App\asteroid;

class NeoStats
{
    private $startDate;
    private $endDate;
    private $apiKey;
    private $data;

    public function __construct($startDate, $endDate, $apiKey)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->apiKey = $apiKey;

        $this->data = $this->fetchData();
    }

    public static function fromForm()
    {
        $startDate = $_POST['start_date'];
        $endDate = $_POST['end_date'];
        $apiKey = 'hrc3atoJeFtediaxpgh7I4Jh7fp7H3SuHkANxUTJ';


        return new self($startDate, $endDate, $apiKey);
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function getFastestAsteroid()
    {
        $fastestAsteroid = null;
        $fastestSpeed = 0;

        foreach ($this->data as $asteroid) {
            $speed = $asteroid['close_approach_data'][0]['relative_velocity']['kilometers_per_hour'];

            if ($speed > $fastestSpeed) {
                $fastestAsteroid = $asteroid;
                $fastestSpeed = $speed;
            }
        }

        return array(
            'id' => $fastestAsteroid['id'],
            'speed' => $fastestSpeed
        );
    }

    public function getNearestAsteroid()
    {
        $nearestAsteroid = null;
        $nearestDistance = PHP_INT_MAX;

        foreach ($this->data as $asteroid) {
            $distance = $asteroid['close_approach_data'][0]['miss_distance']['astronomical'];

            if ($distance < $nearestDistance) {
                $nearestAsteroid = $asteroid;
                $nearestDistance = $distance;
            }
        }

        return array(
            'id' => $nearestAsteroid['id'],
            'distance' => $nearestDistance
        );
    }

    public function getAverageAsteroidSize()
    {
        $totalSize = 0;
        $numAsteroids = count($this->data);

        foreach ($this->data as $asteroid) {
            $diameter = $asteroid['estimated_diameter']['kilometers']['estimated_diameter_max'];
            $totalSize += $diameter;
        }

        $averageSize = $totalSize / $numAsteroids;
        return $averageSize;
    }
    //https://ssd-api.jpl.nasa.gov/cad.api
    private function fetchData()
    {
        var_dump()

        //https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=DEMO_KEY
        //https://api.nasa.gov/planetary/apod?api_key=hrc3atoJeFtediaxpgh7I4Jh7fp7H3SuHkANxUTJ
        // $url = "https://api.nasa.gov/neo/rest/v1/feed?start_date=$this->startDate&end_date=$this->endDate&api_key=$this->apiKey";
        // $url = "https://api.nasa.gov/planetary/apod?start_date=$this->startDate&end_date=$this->endDate&api_key=$this->apiKey";
        $url = "https://api.nasa.gov/neo/rest/v1/feed?start_date=$this->startDate&end_date=$this->endDate&api_key=$this->apiKey";

        $response = file_get_contents($url);
        $data = json_decode($response, true);
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        exit;
        // if (!$data) {
        //     echo "Error: Failed to retrieve data from API";
        //     exit;
        // }

        return $data['near_earth_objects'][$this->startDate];
    }
}
?>

<!DOCTYPE html 
<html>
<head>
	<title>Neo Stats</title>
</head>
<body>
	<h1>Neo Stats</h1>
	<form method="POST" action="">
		<label for="start_date">Start Date:</label>
		<input type="date" id="start_date" name="start_date" required>

		<label for="end_date">End Date:</label>
		<input type="date" id="end_date" name="end_date" required>

		<button type="submit">Submit</button>
	</form>

	<?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // require_once 'NeoStats.php';
                        $neoStats = NeoStats::fromForm();
                        $startDate = $neoStats->getStartDate();
                        $endDate = $neoStats->getEndDate();
                        $fastestAsteroid = $neoStats->getFastestAsteroid();
                        $nearestAsteroid = $neoStats->getNearestAsteroid();
                        $averageSize = $neoStats->getAverageAsteroidSize();

                        echo "<h2>Results for $startDate to $endDate:</h2>";
                        echo "<p>Fastest Asteroid (ID: " . $fastestAsteroid['id'] . "): " . $fastestAsteroid['speed'] . " km/h</p>";
                        echo "<p>Nearest Asteroid (ID: " . $nearestAsteroid['id'] . "): " . $nearestAsteroid['distance'] . " astronomical units</p>";
                        echo "<p>Average Asteroid Size: " . $averageSize . " kilometers</p>";
                    }
?>
</body>
</html>