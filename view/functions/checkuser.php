<?php
require_once ("../view/functions/connect.php");


$name = $_POST['user'];
$password = $_POST['password'];


$sql = "SELECT user,password FROM user";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>