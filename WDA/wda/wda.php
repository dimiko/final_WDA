<?php

$servername = "localhost";
$username = "gfilippakis";
$password = "wO9PMFpuqe16rcbX";
$dbname = "george";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?><!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'body.php'; ?>
</html><?php

mysqli_close($conn);

?>