<?php
	require('config/database.php');

	$alert = '';
	$alertClass = '';
	$query = '';
	
	if (filter_has_var(INPUT_POST, 'submit')) {
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$suggestion = mysqli_real_escape_string($conn, $_POST['suggestion']);

		if (!empty($name) && !empty($email)) {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$alert = "Please enter a valid email address";
				$alertClass = "wrong";	
			}
			elseif (strcmp(substr($email, -4), '.edu') !== 0) {
				$alert = "You must have .edu email to use this app";
				$alertClass = "wrong";	
			//TODO validate that email doesn't already exist	
			} else {
				if (!empty($suggestion)) {
					$query = "INSERT INTO basicuserinfo(email, name, suggestion) VALUES ('$email', '$name', '$suggestion')";
				} else {
					$query = "INSERT INTO basicuserinfo(email, name) VALUES ('$email', '$name')";
				}

				if(mysqli_query($conn, $query)) {
					unset($_POST);
					$alert = "You information has been recorded";
					$alertClass = "right";
				} else {
					$alert = "Something went wrong, please try again";
					$alertClass = "wrong";
				}
			}


		} else {
			$alert = 'Please fill in your name and email';
			$alertClass = 'wrong';
		}

	}

	mysqli_close($conn);


?>