<?php
header("Content-type: application/json");

$name =$_POST["name"];
$address = $_POST["address"];
$country = $_POST["country"];
$region = $_POST["region"];
$lon = $_POST["lon"];
$lat = $_POST["lat"];
$description = $_POST["description"];

$conn = new PDO("mysql:host=localhost;dbname=wad1926;", "wad1926","figobiif");
$results2 = $conn->query("INSERT INTO pointsofinterest(name, type, country, region, description, lon, lat, description)  VALUES('$name', '$type', '$address', '$lon', '$lat', '$description')");
$row2 = $results2 -> fetch();

if($row2==false)
{
    header("HTTP/1.1 401 Unauthorised");
}

else{
    $results2 = $conn->query("INSERT INTO pointsofinterest(name, type, country, region, description, lon, lat, description)  VALUES('$name', '$type', '$address', '$lon', '$lat', '$description')"); 
    echo "<p> Point of Interested Added. <a href='index.html'>Back to the main page</a></p>";
}
?>