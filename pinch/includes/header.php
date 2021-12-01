<?php  
require 'config/config.php';
include("includes/classes/User.php");
include("includes/classes/Post.php");
include("includes/classes/Message.php");
include("includes/classes/Notification.php");
error_reporting(0);


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Pinch</title>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootbox.min.js"></script>
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/jquery.jcrop.js"></script>
	<script src="assets/js/jcrop_bits.js"></script>
	<script src="assets/js/jquery.min.js"></script>


	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/jquery.Jcrop.css" type="text/css" />
	<style>
		.logo{
			width:21.7%;
			margin-top:-4px;	
			
		}
		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			text-align:bottom;
			height:7%;
			background-color:#ED4C67;
			color: white;
			text-align: center;
		}

		.top_bar{
			background-color:#ED4C67;
			height:63px;
		}

		.fa-home,.fa-envelope,.fa-bell,.fa-users,.fa-cog,.fa-sign-out{
			font-size:30px;
			padding-right:10px;
			padding-top:10px;
		}

		.fa-home{
			margin-left:10px;
		}

		.search{
			padding-top:10px;
		}

@media only screen and (max-width: 430px){	
	.top_bar{
		padding-bottom:50px;
	}

	.top_bar a i{
		font-size:50px;
		line-height:10px;
	}

	.user{
		font-size:35px;
	}


.logo{
	width:30.3%;
	margin-top:-4px;
}

		body {
			font-size:20px;
	/* line-height: 17px; */
	background-color: #E6EAE8;
	width:768px;
}



a {
	color: #20AAE5;
	text-decoration: none;
}

.top_bar {
	width: 75%;
	min-width: 768px;
	height: 80px;
	background-color:#ED4C67;
	border-bottom: 0.25em solid #1894ca;
	margin: 0 0 10px 0;
	margin-bottom: 50px;
	display: inline-flex;
	position: fixed;
	z-index: 10;
}

.logo a{
	font-family: 'Bellota-BoldItalic', sans-serif;
	margin-left: 10px;
	font-size: 30;
	position: relative;
	top: 9px;
	text-shadow: #73B6E2 0.5px 0.5px 0px;
	color: #1086BA;
}

a:hover {
	text-decoration: none;
}

nav {
	float: right;
	right: 1px;
	position: absolute;
	margin: 10px;
}

nav a{
	position: relative;
	color: #fff;
	text-decoration: none;
	font-size: 17px;
}

nav a:hover {
	border-bottom: 7px solid #e67e22;
	color: #fff;
}

.wrapper {
	margin: 0 auto;
	top: 50px;
	position: relative;
	padding: 0 10px;
	width: 75%;
	min-width: 768px;
}

.column {
	margin-top: 30px;
	background-color: #fff;
	padding: 10px;
	border: 1px solid #D3D3D3;
	border-radius: 5px;
	box-shadow: 2px 2px 1px #D3D3D3;
	z-index: -1;
	color: #555;
}

.user_details  {
	width: 430px;
	float: left;
	margin-bottom: 20px;
}

.user_details img {
	height: 120px;
	border-radius: 5px;
	margin-right: 5px;
}

.user_details_left_right {
	width: 120px;
	display: inline-table;
	position: absolute;
}

.main_column {
	float:left;
	margin-left:auto;
	margin-right:20px;
	width: 100%;
	z-index: -1;
	min-height: 250px;
	font-size:30px;
}

.post_form {
	width: 100%;
}

.post_form textarea {
	width: 81%;
	height: 60px;
	border-radius: 3px;
	margin-right: 5px;
	border: 1px solid #D3D3D3;
	font-size: 30px;
	padding: 5px;
}

textarea:focus {
	outline: 0;
}

.post_form input[type="submit"] {
	width: 11%;
	height: 60px;
	border: none;
	border-radius: 3px;
	background-color: #3498db;
	font-family: 'Bellota-BoldItalic', sans-serif;
	color: #1E75CA;
	text-shadow: #73B6E2 0.5px 0.5px 0px;
	font-size: 90%;
	position: absolute;
	outline: 0;
	margin: 0;
}

.post_form input[type="submit"]:active {
	padding: 5px 4px 4px 5px;
}

.status_post {
	width: 96%;
	font-size: 30px;
	padding: 0px 5px;
	min-height: 75px;
	cursor:pointer;
}

.post_profile_pic {
	float: left;
	margin-right: 7px;
}

.post_profile_pic img {
	border-radius: 5px;
}

#comment_iframe {
	max-height: 250px;	
	width: 100%;
	margin-top: 5px;
}

.comment_section {
	padding: 0 5px 5px 5px;
}

.comment_section img {
	margin: 0 3px 3px 3px;
	border-radius: 3px;
}

#comment_form textarea {
	border-color: #D3D3D3;
	width: 100%;
	height: 55px;
	border-radius: 5px;
	color: #616060;
	font-size: 14px;
	margin: 3px 3px 3px 5px;
	font-size:25px;
}
#comment_form input[type="submit"] {
	border:none;
	background-color: #20AAE5;
	color: #156588;
	border-radius: 5px;
	width: 13%;
	height: 35px;
	margin-top: 3px;
	position: absolute;
	font-family: 'Bellota-BoldItalic', sans-serif;
	text-shadow: #73B6E2 0.5px 0.5px 0px;
}

.newsfeedPostOptions {
	padding: 0px;
	text-decoration: none;
	color:#20AAE5;
	border:none;
}

.newsfeedPostOptions iframe {
	border: 0px;
	height: 30px;
	width: 120px;
}


.user_details  {
	width: 750px;
	float: left;
	margin-bottom: 20px;
}

.user_details img {
	height: 120px;
	border-radius: 5px;
	margin-right: 5px;
}

.profile_left {
	top: -10px;
	width: 750px;
	max-width: 400px;
	min-width: 130px;
	height: 100%;
	float: left;
	position: relative;
	background-color: #37B0E9;
	border-right: 10px solid #83D6FE;
	color: #CBEAF8;
	margin-right: 20px;
}

.profile_left img {
	min-width: 30px;
	float:left;
	width: 55%;
	margin: 20px;
	border: 5px solid #83D6FE;
	border-radius: 100px;
}

.profile_info {
	padding-top:50px;
	margin-top:50px;
	display: list-item;
	background-color: #2980b9;
	width: 100%;
	padding: 10px 0 10px 0;
}

.profile_info p {
	margin: 0 0 0 20px;
	word-wrap: break-word;
}

.danger {
	background-color: #e74c3c;
}
.warning {
	background-color: #f0ad4e;
}
.default {
	background-color: #bdc3c7;
}
.success {
	background-color: #2ecc71;
}
.info {
	background-color: #3498db;
}
.deep_blue {
	background-color: #0043f0;
}

.profile_left input[type="submit"] {
	width: 90%;
	height: 30px;
	border-radius: 5px;
	margin: 7px 0 0 7px;
	border: none;
	color: #fff;
}

#accept_button {
	width: 20%;
	height: 28px;
	border-radius: 5px;
	margin: 5px;
	border: none;
	color: #fff;
	background-color: #2ecc71;
}
#ignore_button {
	width: 20%;
	height: 28px;
	border-radius: 5px;
	margin: 5px;
	border: none;
	color: #fff;
	background-color: #e74c3c;
}

.delete_button {
	height: 22px;
	width: 22px;
	padding: 0;
	float: right;
	border-radius: 4px;
	right: -15px;
	position: relative;
	line-height:10px;
}

.profile_main_column {
	min-width: 675px;
	margin-left:20px;
	float: left;
	width: 70%;
	z-index: -1;

}

.profile_info_bottom {
	margin: 10 0 0 7px;

}


.search {
	margin: 8px 0 0 -18%;
}

.post_body{
	height:30px;
	font-size:50px;
}



	
}

		

		

	</style>
</head>
<body>

	<div class="top_bar"> 

		<div class="logo">
			<a href="index.php"><img class="logo" src="assets/images/icons/logo.png"></a>
		</div>


		<div class="search">

			<form action="search.php" method="GET" name="search_form">
				<input type="text" onkeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

				<div class="button_holder">
					<img src="assets/images/icons/magnifying_glass.png">
				</div>

			</form>

			<div class="search_results">
			</div>

			<div class="search_results_footer_empty">
			</div>



		</div>

		<nav>
			<?php
				//Unread messages 
				$messages = new Message($con, $userLoggedIn);
				$num_messages = $messages->getUnreadNumber();

				//Unread notifications 
				$notifications = new Notification($con, $userLoggedIn);
				$num_notifications = $notifications->getUnreadNumber();

				//Unread notifications 
				$user_obj = new User($con, $userLoggedIn);
				$num_requests = $user_obj->getNumberOfFriendRequests();
			?>


			<a class="user" href="<?php echo $userLoggedIn; ?>">
				<?php echo $user['first_name']; ?>
			</a>
			<a href="index.php">
				<i class="fa fa-home fa-lg"></i>
			</a>
			<a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'message')">
				<i class="fa fa-envelope fa-lg"></i>
				<?php
				if($num_messages > 0)
				 echo '<span class="notification_badge" id="unread_message">' . $num_messages . '</span>';
				?>
			</a>
			<a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'notification')">
				<i class="fa fa-bell fa-lg"></i>
				<?php
				if($num_notifications > 0)
				 echo '<span class="notification_badge" id="unread_notification">' . $num_notifications . '</span>';
				?>
			</a>
			<a href="requests.php">
				<i class="fa fa-users fa-lg"></i>
				<?php
				if($num_requests > 0)
				 echo '<span class="notification_badge" id="unread_requests">' . $num_requests . '</span>';
				?>
			</a>
			<a href="settings.php">
				<i class="fa fa-cog fa-lg"></i>
			</a>
			<a href="includes/handlers/logout.php">
				<i class="fa fa-sign-out fa-lg"></i>
			</a>

		</nav>

		<div class="dropdown_data_window" style="height:0px; border:none;"></div>
		<input type="hidden" id="dropdown_data_type" value="">


	</div>


	<script>
	var userLoggedIn = '<?php echo $userLoggedIn; ?>';

	$(document).ready(function() {

		$('.dropdown_data_window').scroll(function() {
			var inner_height = $('.dropdown_data_window').innerHeight(); //Div containing data
			var scroll_top = $('.dropdown_data_window').scrollTop();
			var page = $('.dropdown_data_window').find('.nextPageDropdownData').val();
			var noMoreData = $('.dropdown_data_window').find('.noMoreDropdownData').val();

			if ((scroll_top + inner_height >= $('.dropdown_data_window')[0].scrollHeight) && noMoreData == 'false') {

				var pageName; //Holds name of page to send ajax request to
				var type = $('#dropdown_data_type').val();


				if(type == 'notification')
					pageName = "ajax_load_notifications.php";
				else if(type = 'message')
					pageName = "ajax_load_messages.php"


				var ajaxReq = $.ajax({
					url: "includes/handlers/" + pageName,
					type: "POST",
					data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(response) {
						$('.dropdown_data_window').find('.nextPageDropdownData').remove(); //Removes current .nextpage 
						$('.dropdown_data_window').find('.noMoreDropdownData').remove(); //Removes current .nextpage 


						$('.dropdown_data_window').append(response);
					}
				});

			} //End if 

			return false;

		}); //End (window).scroll(function())


	});

	</script>


	<div class="wrapper">