<?php





$n= $_POST["name"];
$t= $_POST["type"];
$c=$_POST["country"];
$r=$_POST["region"];
$lon= $_POST["longitude"];
$lat =$_POST["latitude"];
$des =$_POST["description"];
$conn = new PDO("mysql:host=localhost;dbname=wad1926;", "wad1926","figobiif");



$conn->query("INSERT IGNORE INTO pointsofinterest (name, type, country, region, lon, lat, description) VALUES ('$n', '$t', '$c', '$r', '$lon', '$lat', '$des')");




if (empty($_POST["name"]))
{
	header("HTTP/1.1 400 Bad Request");
	echo "Name is empty";
	
}

else {
	$name = $_POST["name"];
}






						 
?>