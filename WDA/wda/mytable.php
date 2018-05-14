<table class="table">
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
	</tr>
	<?php
	
	$sql = "SELECT id_wda, firstname, lastname, email FROM wda";
	$result = mysqli_query($conn, $sql);
	if (mysqli_query($conn, $sql)) {
		//echo '<div class="alert alert-success" role="alert">New record created successfully</div>';
	} else {
		echo '<div class="alert alert-success" role="alert">Error: ' . $sql . "<br>" . mysqli_error($conn).'</div>';
	}
	//var_dump($result);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while ($row = mysqli_fetch_assoc($result)) { ?>
	<tr>
		<td><?php echo $row['id_wda']; ?></td>
		<td><?php echo $row['firstname']; ?></td>
		<td><?php echo $row['lastname']; ?></td>
		<td><?php echo $row['email']; ?></td>
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