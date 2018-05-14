<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wda_db";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>
