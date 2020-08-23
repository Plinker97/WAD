<?php
header("Content-type: application/json");

$a = $_GET["region"];
$conn = new PDO("mysql:host=localhost;dbname=wad1926;", "wad1926","figobiif");
$query = "SELECT  * FROM pointsofinterest WHERE region LIKE '%$a%'";
// var_dump($query);
$results = $conn->query($query);
$resultsAsAssocArray = $results -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultsAsAssocArray);
?>