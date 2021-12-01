<?php 
include("includes/header.php");


if(isset($_POST['post'])){
	$post = new Post($con, $userLoggedIn);
	$post->submitPost($_POST['post_text'], 'none');
}
 

 ?>

<html lang="en-US">
	 <head>
	 <meta name="description" content="Index Page of Pinch">
  <meta name="keywords" content="User, homepage, index page, profile">
  <meta name="author" content="Tinkle Patel">
		 <title>Index Page: Pinch</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <style>
			 .main_column{
				 margin-bottom:200px;
			 }
			 #post_button{
				 background-color:#ED4C67;
				 color:#dfe4ea;
			 }

			 .user_details a{
				 color:#ED4C67;
			 }

			 #profile_pic,.logo{
				 border-radius:60px;
			 }

			 .footer{
				 line-height:40px;
			 }
			 @media only screen and (max-width:430px){

				
			 }
		 </style>
	</head>
	<body>
	<div class="user_details column">
		<a href="<?php echo $userLoggedIn; ?>">  <img id="profile_pic" alt="profile pic" src="<?php echo $user['profile_pic']; ?>"> </a>
		<!-- echo $userLoggedIn; -->
		<div class="user_details_left_right">
			<a href="<?php echo $userLoggedIn; ?>">
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

	<div class="main_column column">
		<form class="post_form" action="index.php" method="POST">
			<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
			<input type="submit" name="post" id="post_button" value="Post">
			<hr>

		</form>

		<?php
			$data_query = mysqli_query($con, "SELECT * FROM posts WHERE username='$userLoggedIn' AND deleted='no' ORDER BY id DESC");
			if(!$data_query || mysqli_num_rows($data_query) == 0) {
				$row = mysqli_fetch_array($data_query);
				$post = new Post($con, $userLoggedIn);
				$post->loadPostsFriends($row,10);
				
			}else{
				echo "You have not posted anything";
			}
			
		?>

		<!-- <div class="posts_area"></div>
		<img id="loading" src="assets/images/icons/loading.gif"> -->


	</div>

	




	<script>
	var userLoggedIn = '<?php echo $userLoggedIn; ?>';

	$(document).ready(function() {

		$('#loading').show();

		//Original ajax request for loading first posts 
		$.ajax({
			url: "includes/handlers/ajax_load_posts.php",
			type: "POST",
			data: "page=1&userLoggedIn=" + userLoggedIn,
			cache:false, 

			success: function(data) {
				$('#loading').hide();
				$('.posts_area').html(data);
			}
		});

		$(window).scroll(function() {
			var height = $('.posts_area').height(); //Div containing posts
			var scroll_top = $(this).scrollTop();
			var page = $('.posts_area').find('.nextPage').val();
			var noMorePosts = $('.posts_area').find('.noMorePosts').val();

			if ((document.body.scrollHeight == document.body.scrollTop + window.innerHeight) && noMorePosts == 'false') {
				$('#loading').show();

				var ajaxReq = $.ajax({
					url: "includes/handlers/ajax_load_posts.php",
					type: "POST",
					data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(response) {
						$('.posts_area').find('.nextPage').remove(); //Removes current .nextpage 
						$('.posts_area').find('.noMorePosts').remove(); //Removes current .nextpage 

						$('#loading').hide();
						$('.posts_area').append(response);
					}
				});

			} //End if 

			return false;

		}); //End (window).scroll(function())


	});

	</script>
</div>
<div class="footer">
  		<p>&copy 2021 Amandeep Singh Gill, Tinkle Patel, Bansari Desai</p>
</div>
</body>
</html>