<?php require('php/addUser.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width">
		<meta name = "description" content = "sell, buy used goods">
		<meta name = "keywords" content = "buy used, sell used, safe ecommerce platform">
		<meta name = "author" content = "Bidly">
		<title> Name | Home </title>
		<link rel="stylesheet" href = "./css/style.css">
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
						<li><a href = "#about-start">About</a></li>
						<li><a href = "#app-start">Get the App</a></li>
						<li><a href = "founder.php">Founder</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id = "landing">
			<div class = "container">
				<div id = "intro-blurb">
					<h1>Lorem ipsum dolor sit amet, consectetur</h1>
					<p>Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna</p>
					<a href = "#app-start"><button type = "button">Get the App</button></a>
				</div>
			</div>
		</section>

		<section id = "about" class = "header">
			<a name = "about-start"></a>
			<div class = "container">
				<h3>About the App</h3>
				<div id = "about-container">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida in fermentum et sollicitudin. Auctor urna nunc id cursus. Auctor augue mauris augue neque. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Lectus quam id leo in vitae turpis massa sed elementum. Orci ac auctor augue mauris augue neque. Eget dolor morbi non arcu. Morbi tincidunt augue interdum velit euismod.</p>
				</div>
				<video>
	  				<source src="movie.mp4" type="video/mp4">
	  				<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
				</video>
			</div>	
		</section>

				
	<div class = "container">
		<section class = "contact">
				<a name = "app-start"></a>
				<h3 class = "header">Get The App</h3>
				<p id = "disclaimer2">This is a notice message about something, it will tell users something about this application just in case</p> 
				<form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
					<div id = "general-info">
						<div id = "name">
							<label>Name</label>
							<input type = "text" placeholder="You're Name" name = "name" value = "<?php echo isset($_POST['name']) ? $name : ''; ?>">
						</div>
						<div id = "email">
							<label>Email</label>
							<input type = "text" placeholder="Email Address" name = "email" value = "<?php echo isset($_POST['email']) ? $email : ''; ?>">
						</div>
					</div>
					<div id = "message">
						<label>Suggestions?</label><br>
						<textarea placeholder="Tell us your thoughts" name = "suggestion"><?php echo isset($_POST['suggestion']) ? $suggestion : ''; ?></textarea>
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