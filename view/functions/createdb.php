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
*/

?>

