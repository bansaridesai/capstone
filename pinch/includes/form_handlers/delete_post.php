<?php 
require '../../config/config.php';
	
	if(isset($_GET['post_id']))
		$post_id = $_GET['post_id'];

	if(isset($_POST['result'])) {
		if($_POST['result'] == 'true')
			// $query = mysqli_query($con, "UPDATE posts SET deleted='yes' WHERE id='$post_id'");
			$get_user = mysqli_query($con,"SELECT added_by FROM posts WHERE id='$post_id'");
			$row = mysqli_fetch_array($get_user);
			$username=$row['added_by'];
			$update_post_count = mysqli_query($con,"UPDATE users SET num_posts=num_posts-1 WHERE username='$username'");
			$query = mysqli_query($con,"DELETE FROM posts WHERE id='$post_id'");

	}

?>