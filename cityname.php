<?php

$cities = array(
    "Pune",
    "Mumbai",
    "Nashik",
    "Sangamner",
    "Nagpur",
    "Delhi",
    "Chennai"
);

$search = $_GET["city"];
$found = false;

foreach ($cities as $city) {

    if (stripos($city, $search) !== false) {
        echo $city . "<br>";
        $found = true;
    }
}

if (!$found) {
    echo "City not found, try againn";
}

?>