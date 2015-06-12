<?php
echo "test";
require_once ("connect.php");

$sql = "SELECT * from hike";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["areaid"] == $area) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Difficulty:" . $row["difficulty"]. "<br>";
        $area = $row["areaid"];
        } else {
        echo "New Area: " . $row["areaid"] . "<br>";
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Difficulty:" . $row["difficulty"]. "<br>";
        $area = $row["areaid"];
        }
    }
} else {
    echo "0 results";
}
$conn->close();
?>