<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<link rel="stylesheet" href="styleee.css">
	<title>Rock Paper Scissor</title>
</head>
<body>
<?php echo "<h1 >Welcome <b class='cola'> " . $_SESSION['username'] . " </b></h1>"; ?>
<button class="lgt"><a href="logout.php"> Logout </a></button>	
<section class="game">
		<br><br><br>
		<!--Title -->
		<div class="title">Rock Paper Scissor</div>
		
		<!--Display Score of player and computer -->
		<div class="score">
			<div class="playerScore">
				<h2>Player</h2>
				<p class="p-count count">0</p>

			</div>	
			<div class="computerScore">
				<h2>Computer</h2>
				<p class="c-count count">0</p>

			</div>
		</div>
	
		<div class="move">Choose your move</div>
		
		<!--Number of moves left before game ends -->
		<div class="movesleft">Moves Left: 10 </div>
		
		<!--Options available to player to play game -->
		<div class="options">
			<button class="rock">Rock</button>
			<button class="paper">Paper</button>
			<button class="scissor">Scissors</button>
		</div>
		
		<!--Final result of game -->
		<div class="result"></div>
		
		<!--Reload the game -->
		<button class="reload"></button>

	</section>

	<script src="app.js"></script>
</body>
</html>
