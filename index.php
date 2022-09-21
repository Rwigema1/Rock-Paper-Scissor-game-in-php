<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("location : welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location:  welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="stylee.css">

	<title>Login | Page</title>
</head>
<body>
	<div class="container">
		<div class="cont">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
	<div class="about">
		<p class="more"><b>Rock, paper, and scissors game </b> is a simple fun game in which both the players have to make a rock, paper, or scissors. It has only two possible outcomes a draw, or a win for one player and a loss for the other player. We will be designing the game using JavaScript where a player will be playing against the computer. In total there will be 10 moves. The player has to choose one option among the rock, paper, and scissors. A random option will be generated from the computer’s side and the one who wins will get one point every time. After 10 moves are over the final result will be displayed on the screen with a button to restart the game. The game will be completely responsive so that it can be played on every device.</p>
	</div>
	</div>
</body>
</html>