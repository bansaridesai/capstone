<?php 
include("includes/header.php");

$message_obj = new Message($con, $userLoggedIn);
$logged_in_user_obj = new User($con, $userLoggedIn); 

if(isset($_GET['u']))
	$user_to = $_GET['u'];
else {
	$user_to = $message_obj->getMostRecentUser();
	if($user_to == false)
		$user_to = 'new';
}

if($user_to != "new")
	$user_to_obj = new User($con, $user_to);

if(isset($_POST['post_message'])) {

	if(isset($_POST['message_body'])) {
		$body = mysqli_real_escape_string($con, $_POST['message_body']);
		$date = date("Y-m-d H:i:s");
		$message_obj->sendMessage($user_to, $body, $date);
	}

}

 ?>

<html lang="en">
	 <head>
		 <tilte></title>
		 <meta charset="UTF-8">
  <meta name="description" content="Mesages page of Pinch Social Network">
  <meta name="keywords" content="Pinch, Chatting, Messages, Social">
  <meta name="author" content="Amandeep Singh Gill">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <style>
			 #message_submit{
				 background-color:#ED4C67;
				 color:#dfe4ea;
			 }
			 #new_message{
				 color:#ED4C67;
			 }

			 .user_details{
				 /* background-color:#ED4C67; */
			 }

			 .user_details a{
				color:#ED4C67;
			 }

			 .main_column a{
				 color:#ED4C67;
			 }

			 .main_column{
				 margin-bottom:200px;
			 }
			 .footer{
				 line-height:40px;
			 }
		 </style>
     </head>
<body>

 <div class="user_details column">
		<a href="#">  <img alt="profile pic" src="<?php echo $user['profile_pic']; ?>"> </a>

		<div class="user_details_left_right">
			<a href="#">
			<?php 
			echo $user['first_name'] . " " . $user['last_name'];

			 ?>
			</a>
			<br>
			<?php echo "Posts: " . $user['num_posts']. "<br>"; 
			echo "Likes: " . $user['num_likes'];

			?>
		</div>
	</div>

	<div class="main_column column" id="main_column">
		<?php  
		if($user_to != "new"){
			echo "<h4>You and <a href='$user_to'>" . $user_to_obj->getFirstAndLastName() . "</a></h4><hr><br>";

			echo "<div class='loaded_messages' id='scroll_messages'>";
				echo $message_obj->getMessages($user_to);
			echo "</div>";
		}
		else {
			echo "<h4>New Message</h4>";
		}
		?>



		<div class="message_post">
			<form action="" method="POST">
				<?php
				$username = $user_to_obj->getUsername();
				if($user_to == "new") {
					echo "Select the friend you would like to message <br><br>";
					?> 
					<label for="'seach_text_input'">To:</label> <input type='text' onkeyup='getUsers(this.value, "<?php echo $userLoggedIn; ?>")' name='q' placeholder='Name' autocomplete='off' id='seach_text_input'>

					<?php
					echo "<div class='results'></div>";
				}
				else {
					if($logged_in_user_obj->isFriend($username)) {
					echo "<textarea name='message_body' id='message_textarea' placeholder='Write your message ...'></textarea>";
					echo "<input type='submit' name='post_message' class='info' id='message_submit' value='Send'>";
					}
					else{
					 echo "You are not friends with ". $user_to_obj->getFirstAndLastName();
					}
				}

				?>
			</form>

		</div>

		<script>
			var div = document.getElementById("scroll_messages");
			div.scrollTop = div.scrollHeight;
		</script>

	</div>

	<div class="user_details column" id="conversations">
			<h4>Conversations</h4>

			<div class="loaded_conversations">
				<?php echo $message_obj->getConvos(); ?>
			</div>
			<br>
			<a href="messages.php?u=new">New Message</a>

		</div>

	<!-- footer -->
	<div class="footer">
  		<p>&copy 2021. Amandeep Singh Gill, Tinkle Patel, Bansari Desai</p>
	</div>
