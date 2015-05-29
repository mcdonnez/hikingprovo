<?php
require_once ("../view/functions/connect.php");

$name = htmlspecialchars($_POST['user']);
$password = htmlspecialchars($_POST['pass']);
$sql = "SELECT username,password FROM user WHERE username='$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($name == $row["username"] && $password == $row["password"])
	{
		// remember that user's logged in
		$_SESSION["authenticated"] = true;
		
		// save username in cookie for a week
		setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);
		
		//redirect user to homepage
		$host = $_SERVER["HTTP_HOST"];
		$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
		header("Location: http://$host$path/index.php");
	}
    }
} else {
    echo "0 results";
}
$conn->close();
?>