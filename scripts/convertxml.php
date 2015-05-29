<?php
$xml = simplexml_load_file("../model/hike_database.xml") or die ("Error: Cannot create object");
require_once ("../view/functions/connect.php");
foreach ($xml->children() as $area) {
foreach ($area->hike as $hike) {
$sql = "INSERT INTO hike
(id,
areaid,
name,
difficulty,
distance,
popularity,
description,
location)
VALUES
('" . $hike['id'] . "',
'" . $area['id'] . "',
'" . $hike->name . "',
'" . $hike->difficulty . "',
'" . $hike->distance . "',
'" . $hike->popularity . "',
'" . addslashes($hike->description) . "',
'" . $hike->location . "')
";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully: " . $hike->name . " ID: " . $hike['id'] . "<br />\n";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql) . "<br>";
}
}}
$conn->close();

/*
if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully: " . $hike->name . " ID: " . $hike['id'] . "<br />\n";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli) . "<br>";
}
	break;
}
}
*/
?>