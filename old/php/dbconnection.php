<?php

	$username = "root";
	$password = "";
	$hostname = "localhost";
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	$selected = mysql_select_db("wda_db", $dbhandle) or die("Could not select examples");
	$choice = mysql_real_escape_string($_GET['choice']);
	
	$query = "SELECT * FROM wda_db WHERE room_type='$choice'";
	
	$result = mysql_query($query);
		
	while ($row = mysql_fetch_array($result)) {
   		echo "<option>" . $row{'room_type'} . "</option>";
	}
?>