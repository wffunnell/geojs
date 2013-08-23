<?php

$lat = $_GET['lat'];
$long = $_GET['long'];

$json_url = 'http://api.openweathermap.org/data/2.5/weather?' + 'lat=' + $lat + '&long' + $long;

$ch = curl_init( $json_url );
 
// Configuring curl options
$options = array(
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_USERPWD => $username . ":" . $password,   // authentication
	CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
	CURLOPT_POSTFIELDS => $json_string
);
 
// Setting curl options
curl_setopt_array( $ch, $options );

// Getting results
$result = curl_exec ($ch);
if($result === FALSE) {
	echo("I died , o dear");
    die(curl_error($ch));
} else {
	echo($lat);
}


?>