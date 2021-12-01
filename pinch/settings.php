<?php 
include("includes/header.php");
include("includes/form_handlers/settings_handler.php");
?>
<html lang="en">
	<head>
		<title>Settings: Pinch</title>
		<meta charset="UTF-8">
  <meta name="description" content="Settings Page: Pinch">
  <meta name="keywords" content="Settings, reset password, reset email, first name, last name, name">
  <meta name="author" content="Bansari Desai : Pinch Developer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>

			.main_column{
				margin-bottom:150px;
			}
			.main_column a{
				color:#ED4C67;
			}

			#save_details{
				background-color:#ED4C67;
				color:
			}
			.footer{
				height:7%;
				line-height:40px;
			}

			img{
				border-radius:60px;
			}

		</style>
    </head>
	<body>


<div class="main_column column">

	<h4>Account Settings</h4>
	<?php
	echo "<img alt=' profile pic of user ' src='" . $user['profile_pic'] ."' class='small_profile_pic'>";
	?>
	<br>
	<a href="upload.php">Upload new profile picture</a> <br><br><br>

	Modify the values and click 'Update Details'

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	?>

	<form action="settings.php" method="POST">
	<label for="settings_input">First Name:</label> <input type="text" name="first_name" required value="<?php echo $first_name; ?>" id="settings_input"><br>
	<label for="settings_input">Last Name: </label><input type="text" name="last_name" required value="<?php echo $last_name; ?>" id="settings_input"><br>
	<label for="settings_input">Email:</label> <input type="text" name="email" required value="<?php echo $email; ?>" id="settings_input"><br>

		<?php echo $message; ?>

		<input type="submit" name="update_details" id="save_details" value="Update Details" class="info settings_submit"><br>
	</form>

	<h4>Change Password</h4>
	<form action="settings.php" method="POST">
		<label for="settings_input">Old Password:</label> <input type="password" required name="old_password" id="settings_input"><br>
		<label for="settings_input">New Password:</label> <input type="password" required name="new_password_1" id="settings_input"><br>
		<label for="settings_input">New Password Again:</label> <input type="password" required name="new_password_2" id="settings_input"><br>

		<?php echo $password_message; ?>

		<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit"><br>
	</form>

	<h4>Close Account</h4>
	<form action="settings.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Close Account" class="danger settings_submit">
	</form>


</div>

<div class="footer">
  	<p>&copy 2021 Amandeep Singh Gill, Tinkle Patel, Bansari Desai</p>
</div>
