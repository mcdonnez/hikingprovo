<?php
//here's a change
require_once('connect.php');

$sql = "Select * from user";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error showing tables" . $conn->error;
}
$conn->close();


/*
mysql --host=us-cdbr-iron-east-02.cleardb.net --user=b8e9dd604a65d7 --password=211c9f81 heroku_1358da360762cc0
CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
username VARCHAR(40),
password CHAR(60),
reg_date TIMESTAMP
)
// TO create a new user
INSERT INTO user 
(id, firstname, lastname, email, username, password) 
VALUES (1,'Zachary','McDonnell','mailman966@gmail.com','mcdonnez','12345')
// Hikes Database
CREATE TABLE hike (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
areaid INT(6),
name VARCHAR(30) NOT NULL,
difficulty VARCHAR(20),
distance VARCHAR(10),
popularity VARCHAR(20),
description VARCHAR(550),
location VARCHAR(500),
reg_date TIMESTAMP
)
CREATE TABLE area (
areaid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
areaname VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)
// Table to Select and display hikes
$sql = "SELECT id, areaid, name, difficulty, distance, description, location FROM hike";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

?>

