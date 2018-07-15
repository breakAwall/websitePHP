<?php
	require('config/database.php');

	if (filter_has_var(INPUT_POST, 'submit')) {

		$query = 'SELECT id, email, name FROM basicuserinfo ORDER BY id';

		$result = mysqli_query($conn, $query);

		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

		//echo $posts[0]["author"];
		foreach($users as $user) {
			$id = $user["id"];
			$name = $user["name"];
			$toEmail = $user["email"];

			// Subject
			if (isset($_POST['subject'])) {
				$subject = $_POST['subject'];
			} else {
				$subject = 'No Subject';
			}

			// Body
			$body = '';
			if (isset($_POST['greeting'])) {
				$body = "<p>".$_POST['greeting'] . " " . $name. ","."</p>";
			}

			if (isset($_POST['body'])) {
				$body .= "<p>".$_POST['body']."</p>";
			}

			if (isset($_POST['end'])) {
				$body .= "<p>".$_POST['end'].",</p>Bidly Team";
			}

			// Headers
	    	$headers = "MIME-Version: 1.0 \r\n";
	    	$headers .=  "Content-Type:text/html \r\n";
	    	$headers .= "From: Bidly" . "\r\n";	

	    	if(mail($toEmail, $subject, $body, $headers)) {
	    		echo 'success<br>';
	    	} else {
	    		echo 'failure<br>';
	    	}

		}

	mysqli_free_result($result);

	}	
	
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Email All Users </title>
	</head>
	<body>
		<form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
			<div>
				<label>Subject</label>
				<input type = "text" name = "subject" value = "<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
			</div>
			<div>
				<label>Greeting</label>
				<input type = "text" name = "greeting" value = "<?php echo isset($_POST['greeting']) ? $greeting : ''; ?>">
			</div>
			<div>
				<label>Body</label><br>
				<textarea name = "body" rows = "10" cols = "100" ><?php echo isset($_POST['body']) ? $body : ''; ?></textarea>
			</div>
			<div>
				<label>End</label>
				<input type = "text" name = "end"  value = "<?php echo isset($_POST['end']) ? $end : ''; ?>"> 
			</div>
			<div id = "button-holder">
				<button type = "submit" name = "submit" class = "submit"> Submit </button>
			</div>
		</form>
	</body>
</html>