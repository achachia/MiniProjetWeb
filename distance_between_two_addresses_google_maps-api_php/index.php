<?php

/**
 *
 * Author: CodexWorld
 * Function Name: getDistance()
 * $addressFrom => From address.
 * $addressTo => To address.
 * $unit => Unit type.
 *
 * */
function getDistance($addressFrom, $addressTo, $unit) {
    //Change address format
    $formattedAddrFrom = str_replace(' ', '+', $addressFrom);
    $formattedAddrTo = str_replace(' ', '+', $addressTo);

    //Send request and receive json data
    $geocodeFrom = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $formattedAddrFrom . '&sensor=false');
    $outputFrom = json_decode($geocodeFrom);
    $geocodeTo = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $formattedAddrTo . '&sensor=false');
    $outputTo = json_decode($geocodeTo);

    //Get latitude and longitude from geo data
    $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
    $longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
    $latitudeTo = $outputTo->results[0]->geometry->location->lat;
    $longitudeTo = $outputTo->results[0]->geometry->location->lng;

    //Calculate distance from latitude and longitude
    $theta = $longitudeFrom - $longitudeTo;
    $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);
    if ($unit == "K") {
        return ($miles * 1.609344) . ' km';
    } else if ($unit == "N") {
        return ($miles * 0.8684) . ' nm';
    } else {
        return $miles . ' mi';
    }
}

$addressFrom = '13 rue louis braille 69800';
$addressTo = '7 CHEMIN CHATANAY 69780 MIONS 69780 MIONS';
$unit = 'K';
$distance=getDistance($addressFrom, $addressTo, $unit);
echo $distance;
?>