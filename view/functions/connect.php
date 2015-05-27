<?php
$database_url = "mysql://b8e9dd604a65d7:211c9f81@us-cdbr-iron-east-02.cleardb.net/heroku_1358da360762cc0?reconnect=true";
$url = parse_url("mysql://b8e9dd604a65d7:211c9f81@us-cdbr-iron-east-02.cleardb.net/heroku_1358da360762cc0?reconnect=true");
print_r($url);
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
} else {
    echo "<br>" . "Success!" . "<br>";
}
?>
