<?php

//$array = ['items' => ['Milk', 'Eggs', 'Bread']];
//$object = json_decode(json_encode($array));
//foreach($object->items as $items){
//  echo $items, ' '; 
//}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wda_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wda_db";


$conn = new mysqli($servername, $username, $password, $dbname);
//$array = mysqli_query($link, "SELECT * FROM `room_type` WHERE 1");
//$array = ['items' => ['Milk', 'Eggs', 'Bread']];
//$object = json_decode(json_encode($array));
//foreach($object->items as $items){
//  echo $items, ' '; 
//}
//   echo $array;

$sql = "SELECT * FROM `room_type` ORDER BY `room_type` ASC";
$result = $conn->query($sql);
var_dump($result);
?>