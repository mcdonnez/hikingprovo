<?php
echo "test";
require_once ("connect.php");

$sql = "select * from hike inner join area on hike.areaid=area.areaid;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $area = " ";
    while($row = $result->fetch_assoc()) {
        if (strcmp($row["areaname"],$area) == 0) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Difficulty:" . $row["difficulty"]. "<br>\n";
        $area = $row["areaname"];
        } else {
        echo "New Area: " . $row["areaname"] . "<br>\n";
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Difficulty:" . $row["difficulty"]. "<br>\n";
        $area = $row["areaname"];
        }
    }
} else {
    echo "0 results";
}
$conn->close();
?>