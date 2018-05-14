<body>
<?php include 'menu.php'; ?>
<?php


$user_id = 5;
$token = sha1($user_id . __FILE__);

if (isset($_POST['feedbackform']) && isset($_POST['token'])) {
	if ($_POST['token'] === $token) {

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$comments = strip_tags($_POST['comments'],"<br><img>");

		$stmt = $db->prepare("
			UPDATE wda 
			SET firstname = ? WHERE id_wda = 5"
		);
		
		$stmt->bind_param('s', $firstname);
		$stmt->execute();
		$stmt->close();
			
		//var_dump(mysqli_real_escape_string($db, $firstname));
		//var_dump($sql);
			
		if ($db->affected_rows) {
			echo '<div class="alert alert-success" role="alert">New record created successfully</div>';
		} else {
			echo '<div class="alert alert-success" role="alert">Error: ' . $sql . "<br>" . $stmt->error.'</div>';
		}
	} else {
		echo '<div class="alert alert-danger" role="alert">Invalid token</div>';
	}
}

?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: <input type="text" name="firstname"><br>
		Lastname: <input type="text" name="lastname"><br>
		Email: <input type="text" name="email"><br>
		Comments: <textarea name="comments"></textarea>
		<input type="hidden" name="token" value="<?php echo $token; ?>">
			
		<input type="submit" name="feedbackform">
	</form>
	
	<?php include 'mytable.php'; ?>
</body>