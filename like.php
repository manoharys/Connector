<?php  
	require 'config/config.php';
	include("includes/classes/User.php");
	include("includes/classes/Post.php");

	if (isset($_SESSION['username'])) {
		$userLoggedIn = $_SESSION['username'];
		$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
		$user = mysqli_fetch_array($user_details_query);
	}
	else {
		header("Location: register.php");
    }
    
    //Get id of post
    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id'];
    }

    $get_likes = mysqli_query($con, "SELECT likes, added_by FROM posts WHERE id = '$post_id'");
    $row = mysqli_fetch_array($get_likes);
    $total_likes = $row['likes'];
    $user_liked = $row['added_by'];

    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$user_liked'");
    $row = mysqli_fetch_array($user_details_query);

    //Like button

    //Unlike button

    //Check for previos likes

    $check_query = mysqli_query($con, "SELECT * FROM likes WHERE username = '$userLoggedIn' AND post_id = '$post_id'");
    $num_row = mysqli_num_row($check_query);

    if($num_rows > 0) {
		echo '<form action="like.php?post_id=' . $post_id . '" method="POST">
				<input type="submit" class="comment_like" name="unlike_button" value="Unlike">
				<div class="like_value">
					
				</div>
			</form>
		';
	}
	else {
		echo '<form action="like.php?post_id=' . $post_id . '" method="POST">
				<input type="submit" class="comment_like" name="like_button" value="Like">
				<div class="like_value">
				
				</div>
			</form>
		';
	}

	?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>
<body>

</body>
</html>
 