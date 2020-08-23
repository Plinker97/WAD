<?php

$type= $_GET["type"];
$connection = curl_init();

curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($connection, CURLOPT_URL, "https://edward2.solent.ac.uk/~wad1926/wad/webservice.php?type=" 
	. $type . "&region=hampshire");
	
curl_setopt($connection,CURLOPT_HEADER, 0);

$response = curl_exec($connection);

curl_close($connection);

$data = json_decode($response, true);

for($i=0; $i<count($data); $i++)
{

    echo  "POI name: " .$data[$i]["name"]."<br>";
    echo  "Type: " .$data[$i]["type"]."<br>";
    echo  "Region: " .$data[$i]["region"]."<br>";
    echo  "Latitude: " .$data[$i]["Latitude"]."<br>";
    echo  "Longitude: " .$data[$i]["Longitude"]."<br>";
   
        
}
	
?>
