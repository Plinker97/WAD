<?php

$name = $_POST["name"];
$address = $_POST["address"];
$country = $_POST["country"];
$region = $_POST["region"];
$lon = $_POST["lon"];
$lat = $_POST["lat"];
$description = $_POST["description"];


$conn = new PDO("mysql:host=localhost;dbname=wad1926;", "wad1926","figobiif");
$conn->query("INSERT INTO pointsofinterest(name, type, country, region, lon, lat, description)  VALUES('$name', '$type', '$country', '$region', '$lon', '$lat', '$description')"); 
 echo "INSERT INTO pointsofinterest(name, type, country, region, lon, lat, description)  VALUES('$name', '$type', '$country', '$lon', '$lat', '$description')";

print_r($conn->errorInfo());