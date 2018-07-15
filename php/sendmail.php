<?php
	$alert = '';
	$alertClass = '';

    if (filter_has_var(INPUT_POST, 'submit')) {
    	$name = htmlentities($_POST['name']);
    	$email = htmlentities($_POST['email']);
    	$message = htmlentities($_POST['message']);

    	if(!empty($name) && !empty($email) && !empty($message)) {


    		if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    			$toEmail = 'lasttheclubs@gmail.com';
    			$subject = 'Potential Investor: ' . $name;
    			$body = '<h3>Name</h3><p>'.$name.'</p>'.
    					'<h3>Email</h3><p>'.$email.'</p>'.
    					'<h3>Body</h3><p>'.$message.'</p>';

    			// Headers
    			$headers = "MIME-Version: 1.0 \r\n";
    			$headers .=  "Content-Type:text/html \r\n";
    			$headers .= "From: " .$name. "\r\n";

    			if(mail($toEmail, $subject, $body, $headers)) {
    				$alert = "Your email has been sent!";
    				$alertClass = "right";
    			} else {
    				$alert = 'Something went wrong while sending the email';
    				$alertClass = "wrong";
    			}

    		} else {
    			$alert = 'Your email address is not valid';
    			$alertClass = "wrong";

    		}
    	} else {
    		$alert = 'Please fill in all the fields';
    		$alertClass = "wrong";
    	}
    }

?>