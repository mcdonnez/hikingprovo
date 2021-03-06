<?php
// Start a session
session_start();
//Prevent Caches for development
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//Dummy password
if (isset($_POST["user"]) && isset($_POST["pass"]))
{
	require_once ("../view/functions/checkuser.php");
}
if (isset($_POST["logout"]))
{
	if ($_POST["logout"] == "Log out") {
	unset($_SESSION['authenticated']);
	unset($_COOKIE['user']);
	setcookie('user', '', time() - 3600); // empty value and old timestamp
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zach's Hiking Guide to Provo</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="media/tree_favicon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
    	function flip() {
     var d = document.getElementById("tile");
     d.className = d.className + " slideTextUp";
}
    </script>
    <script>
    $(function() {
    $( "#accordion" ).accordion({
    	collapsible: true});
    
    });
    </script>
</head>
<body>
<div class="navigator">
<nav>
	<a class="homenav <?php if($_GET['page'] == index || isset($_GET['page']) == false) echo 'myactive' ?>" href="/">Zach's Hiking Guide</a>
  	<a class="mynav <?php if($_GET['page'] == hikes) echo 'myactive' ?>" href="/hikes">Provo Hikes</a>
  	<a class="mynav <?php if($_GET['page'] == map) echo 'myactive' ?>" href="/map">Map</a>
  	<a class="mynav" href="/hikinglog">Hiking Log</a>
	<?php if($_SESSION["authenticated"] != true): ?>
	<a class="mynav <?php if($_GET['page'] == login) echo 'myactive' ?>" href="/login">Log In</a>
	<?php endif ?>
	<?php if($_SESSION["authenticated"] == true): ?>
		<p class="mynav">Hello, <?php echo $_COOKIE["user"] ?></p>
	<form class="mynav login" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
		<input name="logout" type="submit" value="Log out">
	</form>
	<?php endif ?>
</nav>
</div>