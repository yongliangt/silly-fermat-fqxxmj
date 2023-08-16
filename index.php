<?php
#Task2
$unstructured = file_get_contents("unstructured.txt");

$line = explode("\n", $unstructured);

$cities = array();

foreach($line as $l){
    $data = explode("#", $l);
    if (count($data) >= 3){
        $city = trim($data[2]);
        $cities[] = $city;
    }
}

file_put_contents("all_cities.txt", implode("\n", $cities));

$unique_cities = array_unique($cities);

file_put_contents("unique_cities.txt", implode("\n", $unique_cities));

$abbreviations = array();

foreach($unique_cities as $city){
    $abbreviation = strtoupper(substr($city, 0, 3));
    $abbreviations[] = $abbreviation;
}

file_put_contents("abbreviations.txt", implode("\n", $abbreviations));

?>