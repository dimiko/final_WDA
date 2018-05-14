<table class="table">
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Comments</th>
	</tr>
	<?php
	
	$sql = "SELECT * FROM wda";
	$result = $db->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $row['id_wda']; ?></td>
		<td><?php echo $row['firstname']; ?></td>
		<td><?php echo $row['lastname']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['comments']; ?></td>
	</tr>
	<?php
		}
	} else { ?>
	<tr>
		<td colspan="4">No results</td>
	</tr>
	<?php 
	}
	
	?>
</table>


<?php

$user_id = 5;
$token = sha1($user_id . __FILE__);
var_dump(__FILE__);
var_dump($token);
