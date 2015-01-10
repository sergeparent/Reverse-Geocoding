<?php
function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

// Référence : https://developers.google.com/maps/documentation/geocoding/?hl=fr#ReverseGeocoding
// url api + lat et long
// exemple : echo get_data('https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452'); 


echo get_data($_POST['geo']);
?>