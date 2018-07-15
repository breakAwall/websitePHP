<?php require('php/sendmail.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width">
		<meta name = "description" content = "sell, buy used goods">
		<meta name = "keywords" content = "buy used, sell used, safe ecommerce platform">
		<meta name = "author" content = "Bidly">
		<title> Name | Founder Info </title>
		<link type="text/css" rel="stylesheet" href = "css/style.css">
	</head>
	<body>
		<script>
			function func() {
    			var x = document.getElementById("navigation");
    			if (x.className === "toggle") {
        			x.className += " responsive";
    			} else {
        			x.className = "toggle";
    			}
			}
		</script>

		<header>
			<div class = "container">
				<a href = "javascript:void(0)" onclick = "func()" id = "burger">&#9776;</a>
				<div class = "brand">
					<div id = "logo"></div>
					<h1 class = "company-name"> Name </h1>
				</div>
				<nav class = "toggle" id = "navigation">
					<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a href = "index.php#about-start">About</a></li>
						<li><a href = "index.php#app-start">Get the App</a></li>
						<li><a href = "founder.php">Founder</a></li>
					</ul>
				</nav>
			</div>
		</header>


		<section id = "founder-blurb">
			<div class = "container">
				<h3 class = "header">About the Founder</h3>
				<p id = "disclaimer2">Contact info below</p>
				<div id = "tmp-image"></div>
				<div id = "founder-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida in fermentum et sollicitudin. Auctor urna nunc id cursus. Auctor augue mauris augue neque. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend doec pretium. Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Lectus quam id leo in vitae turpis massa sed elementum. Orci ac auctor augue mauris augue neque. Eget dolor morbi non arcu. Morbi tincidunt augue interdum velit euismod.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida in fermentum et sollicitudin. Auctor urna nunc id cursus. Auctor augue mauris augue neque. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend doec pretium. Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Lectus quam id leo in vitae turpis massa sed elementum. Orci ac auctor augue mauris augue neque. Eget dolor morbi non arcu. Morbi tincidunt augue interdum velit euismod.</p>
				</div>
			</div>	
		</section>

		<div class = "container">
		<section class = "contact">
				<h3 class = "header">Contact the Founder</h3>
				<p id = "disclaimer">Are you a prospective investor? Send the founder an email!</p> 
				<form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
					<div id = "general-info">
						<div id = "name">
							<label>Name</label>
							<input type = "text" placeholder="You're Name" name = "name" value = "<?php echo isset($_POST['name']) ? $name : ''; ?>">
						</div>
						<div id = "email">
							<label>Email</label>
							<input type = "text" placeholder="Email Address" name = "email"  value = "<?php echo isset($_POST['email']) ? $email : ''; ?>"> 
						</div>
					</div>
					<div id = "message">
						<label>Message Us</label><br>
						<textarea placeholder="Send Us a Message!" name = "message" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
					</div>
					<div id = "button-holder">
						<button type = "submit" name = "submit" class = "submit"> Submit </button>
					</div>
				</form>
		</section>
		</div>	
		<div class = "alert">
			<p class = "<?php echo $alertClass ?>"> 
				<?php if($alert != ''): ?>
					<?php echo $alert ?>
				<?php endif; ?>	
			 </p>
		</div>
		<footer>
			<p>Name, Copyright &copy; 2018</p>
		</footer>
	</body>
</html>