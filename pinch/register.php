<?php  
error_reporting(0);
// importing database configuration and registration and login handler files
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
  <meta name="description" content="Register or login on Pinch">
  <meta name="keywords" content="Register, Login, Social Network ,Pinch">
  <meta name="author" content="Amandeep Singh Gill">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Pinch!</title>
	<script src="assets/js/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
	<style>
		
		.login_header{
			background-color:#ED4C67;

		}
		.login_header p{
			color:#dfe4ea;
			margin-top:0px;
		}

		.login_header h1{
			color:#12CBC4;
		}

		#register_button{
			background-color:#ED4C67;
			color:#dfe4ea;
		}

		#signin{
			color:#12CBC4;
		}

		#signup{
			color:#12CBC4;
		}

		#login_button{
			background-color:#ED4C67;
			color:#dfe4ea;
		}
		.logo{
			width:21.5%;
			margin-top:-4px;	
			
		}

		.top_bar{
			margin-bottom:40px;
			background-color:#ED4C67;
		}

		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			height:7%;
			width: 100%;
			background-color:#ED4C67;
			color: white;
			text-align: center;
		}

		nav a{
			line-height:40px;
			font-size:27px;
			margin-top:auto;
			margin-bottom:auto;
			padding-right:30px;
		}
		a{
			padding-right:10px;
			margin-top:;
			margin-bottom:auto;
		}

		.err{
			color:red;
		}

		.wrapper{
			margin-bottom:30px;
		}

		img{
			border-radius:200px;
		}

		@media only screen and (max-width: 768px){

			html,body{
				width:80%;
			}
			.logo{
				width:24%;
			}
			
			nav{
				padding-right:200px;
			}
			
			form{
				margin-bottom:100px;
			}
		}

		@media only screen and (max-width:430px){
			.top_bar{
				height:80px;
			}
			.logo{
				width:28%;
			}

			nav a{
				font-size:60px;
				line-height:50px;
			}

			.login_box{
				padding-bottom:100px;
				width:90%;
				margin-bottom:100px;
			}

			.login_header{
				padding-bottom:40px;
				padding-top:40px;
			}

			.login_header h1{
				font-size:75px;
			}

			.login_header p{
				font-size:30px;
			}
			input[type="submit"] {
				background-color: #3498db;
				border: 1px solid #3498db;
				border-radius: 3px;
				margin: 5px 0 10px 0;
				padding: 5px 10px 5px 10px;
				color: #2C6C96;
				text-shadow: #73B6E2 0.5px 0.5px 0px;
				font-family: 'Raleway-Regular', sans-serif;
				font-size: 100%;
				width:75%;
				height:70px;
				margin-top:30px;
				font-size:50px;
			}

			input[type="text"], input[type="email"], input[type="password"] {
				border: 1px solid #e5e5e5;
				margin-top: 5px;
				font-size:30px;
				width: 70%;
				height: 60px;
				margin-bottom: 10px;
				padding-left: 5px;
				margin-top:50px;
			}

			label{
				font-size:30px;
			}

			#signup{
				font-size:50px;
			}

			.footer{
				height:20%;
				font-size:50px;
			}

			.err{
				font-size:25px;
			}

		}

	</style>
</head>
<body>
	<!-- div for the header(contains top bar, logo and navigation) -->
<div id="top" class="top_bar"> 
	<div class="logo">
		<a href="index.php"><img alt="logo of website" id="web_logo" class="logo" src="assets/images/icons/logo.png"></a>
	</div>
	<nav>
		<a href="aboutus.php">About us</a>
		<a href="contactus.php">Contact us</a>
	</nav>
</div>
	<?php  
//	logic for the registration and login screen box change animation
	if(isset($_POST['register_button'])) {
		echo '
		<script>

		$(document).ready(function() {
			$("#first").hide();
			$("#second").show();
		});

		</script>

		';
	}

	?>

	<div class="wrapper">

		<div class="login_box">

			<div class="login_header">
				<h1>Pinch!</h1>
				<p>Create an account or Login Below!</p>
			</div>
			<br>
			<!-- login screen or box -->
			<div id="first">

				<form action="register.php" method="POST">
					<strong><label for="email">Email:</label></strong>
					<input id="email" type="email" required name="log_email" placeholder="Email Address" value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>" >
					<br>

					<strong><label for="password">Password:</label></strong>
					<input type="password" id="password" title="password" name="log_password" required placeholder="Password">
					<br>
					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "<p class='err'>Invalid credentials<p>"; ?>
					<input type="submit" id="login_button" name="login_button" value="Login">
					<br>
					<a href="#" id="signup" class="signup">Want a new account? Sign up here!</a>

				</form>

			</div>
			<!-- registration screen or box -->
			<div id="second">

				<form action="register.php" method="POST">
					<strong><label for="first_name">First Name:</label></strong>
					<input type="text" name="reg_fname" required id="first_name" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					} 
					?>" >
					<br>
					<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "<p class='err'>Your first name should be between 2 and 25 characters</p>";
					else if(in_array("First name can only contain english characters<br>", $error_array)) echo "<p class='err'>First name can only contain english characters</p>";?>
					

					<strong><label for="last_name">Last Name:</label></strong>
					<input type="text" name="reg_lname" required id="last_name" placeholder="Last Name" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" >
					<br>
					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "<p class='err'>Your last name should be between 2 and 25 characters</p>";
					else if(in_array("Last name can only contain english characters<br>", $error_array)) echo "<p class='err'>Last name can only contain english characters</p>";?>
					<label for="email">Email:</label>
					<input type="email" name="reg_email" required id="email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" >
					<br>

					<strong><label for="con_email">Con. Email</label></strong>
					<input type="email" name="reg_email2" id="con_email" required placeholder="Confirm Email" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" >
					<br>
					<?php if(in_array("Email already in use<br>", $error_array)) echo "<p class='err'>Email address is already in use</p>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo "<p class='err'>Email format is invalid</p>";
					else if(in_array("Emails don't match<br>", $error_array)) echo "<p class='err'>Email addresses don't match</p>"; ?>


					<strong><label for="password">Password:</label></strong>
					<input type="password" id="password" name="reg_password" placeholder="Password" required>
					<br>
					<strong><label for="con_password"> Con. Password:</label></strong>
					<input type="password" id="con_password" name="reg_password2" placeholder="Confirm Password" required>
					<br>
					<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "<p class='err'>Your passwords do not match</p>"; 
					else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "<p class='err'>Your password can only contain english characters or numbers</p>";
					else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "<p class='err'>Your password must be betwen 5 and 30 characters</p>"; ?>


					<input type="submit" id="register_button" name="register_button" value="Register">
					<br>

					<?php if(in_array("<span style='color: #000000;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #000000;'>Registered Successfully. You can login now!!</span><br>"; ?>
					<a href="#" id="signin" class="signin">Already registered? Login here!</a>
				</form>
			</div>

		</div>

	</div>
	<!-- footer -->
	<div class="footer">
  		<p>&copy 2021. Amandeep Singh Gill, Tinkle Patel, Bansari Desai</p>
	</div>



</body>
</html>