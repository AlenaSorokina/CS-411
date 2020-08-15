<?php


// some address values
//     $client_address = '1007 W Clark';
//     $client_city = 'Urbana';
//     $client_state = 'IL';
//     $client_zip = '61801';
//
// // building the JSON URL string for Google API call
//     $g_address = str_replace(' ', '+', trim($client_address)).",";
//     $g_city    = '+'.str_replace(' ', '+', trim($client_city)).",";
//     $g_state   = '+'.str_replace(' ', '+', trim($client_state));
//     $g_zip     = isset($client_zip)? '+'.str_replace(' ', '', trim($client_zip)) : '';
//
// $g_addr_str = $g_address.$g_city.$g_state.$g_zip;
$address = '308 E Green str';
$zipcode = 61801;
$encode = urlencode($address).",".'+'.urlencode($zipcode).",".'+'.urlencode("IL");
$key = "AIzaSyC-9-oBrjWboITO5tO2lvFcZLjAWCXC9P0";
$jsonData = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address={$encode}&key={$key}");
$data = json_decode($jsonData);

$xlat = $data->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
$xlong = $data->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};

echo $xlat." , ".$xlong;
 ?>
