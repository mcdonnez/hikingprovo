<?php
$xml = simplexml_load_file("../model/hike_database.xml") or die ("Error: Cannot create object");
$host="localhost";
$user="root";
$passwd="20161Zion!";
$dbname="hiking";
$mysqli = new mysqli($host,$user,$passwd,$dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
foreach ($xml->children() as $area) {
foreach ($area->hike as $hike) {
$sql = "INSERT INTO `hiking`.`hikes`
(idhikes,
hikename,
idarea,
difficulty,
distance,
popularity,
description,
location)
VALUES
('" . $hike['id'] . "',
'" . $hike->name . "',
'" . $area['id'] . "',
'" . $hike->difficulty . "',
'" . "0" . "',
'" . $hike->popularity . "',
'" . addslashes($hike->description) . "',
'" . " " . "')";
// . $hike->location . $hike->distance
if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully: " . $hike->name . " ID: " . $hike['id'] . "<br />\n";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli) . "<br>";
}
	break;
}
}

?>