<?php
print_r($_POST);
require_once ("../view/functions/connect.php");

$areaid = $_POST['areaid'];
$name = $_POST['name'];
$difficulty= $_POST['difficulty'];
$distance = $_POST['distance'];
$description = $_POST['description'];
$location = $_POST['location'];


$sql = "INSERT INTO hike (areaid, name, difficulty, distance, description, location)
VALUES ('$areaid','$name','$difficulty','$distance','$description','$location')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>