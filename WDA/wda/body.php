<body>
<?php include 'menu.php'; ?>
<?php

if (isset($_POST['firstname'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];


	$sql = "
		INSERT INTO wda (
			firstname,
			lastname,
			email
		) VALUES (
			'$firstname',
			'$lastname',
			'$email'
		)";
		
	if (mysqli_query($conn, $sql)) {
		echo '<div class="alert alert-success" role="alert">New record created successfully</div>';
	} else {
		echo '<div class="alert alert-success" role="alert">Error: ' . $sql . "<br>" . mysqli_error($conn).'</div>';
	}
}

?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>?mytextinput=Athens&mynumber=5">
		Name: <input type="text" name="firstname"><br>
		Lastname: <input type="text" name="lastname"><br>
		Email: <input type="text" name="email"><br>
			
		<input type="submit">
	</form>
	
	<?php include 'mytable.php'; ?>
</body>