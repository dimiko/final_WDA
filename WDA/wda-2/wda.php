<?php

$servername = "localhost";
$username = "gfilippakis";
$password = "wO9PMFpuqe16rcbX";
$dbname = "george";
// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error());
}

?><!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'body.php'; ?>
</html><?php

$db->close();
