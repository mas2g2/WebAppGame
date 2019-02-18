<!--
	Milesh Shah
	mas2g2
	11/18/2018
-->
<!DOCTYPE html>
<?php
	if(!isset($_COOKIE["ID"])){

		header("Location: index.php");		
	}
	
	
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
	<script src="final.js"></script>
</head>
<body onload="startGame()">
	<div class="bg">
	<div id="container">
	<h1>Low Grade Flappy Bird</h1>
	<h2 id="score">Final Score: </h2>
	<button id="restart"><a href="game.php">Game</a></button>
	<button id="home"><a href="home.php">Home</a></button>
	<button id="logout"><a href="index.php?logout=true">Logout</a></button>
	</div>
	</div>
</body>
</html>

