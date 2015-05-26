<?php
//$load = dl(php_mysqli.dll);
echo "<h1>test</h1>";
$host="localhost";
$user="root";
$passwd="20161Zion!";
$dbname="hiking";
$mysqli = new mysqli($host,$user,$passwd,$dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
//here's a change
//echo 'Success... ' . $mysqli->host_info . "<br />\n";

$sql = "SHOW DATABASES";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		print_r(array_keys($row));
		echo $row['Database'] . "<br />\n";
    }
} else {
    echo "0 results";
}
/*$sql = "INSERT INTO users (username, password)
VALUES ('mcdonnez','password')";
if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		print_r(array_keys($row));
		echo "Here is the username: " . $row['username'] . " Here is the password: " . $row['password'] . "<br />\n";
    }
} else {
    echo "0 results";
}



$mysqli->close();
?>

