<!--
        name : Milesh Shah
        date : 12/07/2018
        pawprint : mas2g2
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Account</title>
<link rel="stylesheet" href="ca.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
<script>
	function isCookieSet(cookieName){
		var cookieIndex = document.cookie.indexOf(cookieName);
		if(cookieIndex >= 0){
			alert("Password and Confirm Password must match");
			var deleteCookie = cookieName+"; expires=Thu, 01 Jan 1970";
			document.cookie = deleteCookie;
		}
	}
	isCookieSet("UnmatchingPass");
</script>
</head>
<body>
<form action="createAccConfig.php" method="POST">
	<div id="h1">
	<h1>Create Account</h1>
	
	<div class="container">
		<div id="#h2">
			<h2>Please fill out this form to create an account</h2>
		</div>
		<label for="username">Username </label>
		<input id="username" type="text" placeholder="Enter Username" name="username" required>
		<br>
		<label for="password">Password </label>
                <input id="password" type="password" placeholder="Enter Password" name="password" required>
		<br>
		<label for="re-password">Confirm Password </label>
                <input type="password" id="re-password" placeholder="Confirm Password" name="re-password" required>
		<?php 
			if(isset($_GET['createAcc']) and $_GET['createAcc'] == "false"){
				echo "<p id=\"error\">Passwords must match</p>";
			}
		?>
		<br>
		<label for="name">Name </label>
                <input id="name" type="text" placeholder="Enter Your Name" name="name" required>
		<br>
		 <label for="email">Email </label>
                <input type="text" id="email" placeholder="Enter Your Email" name="email" required>	
		<?php
                        if(isset($_GET['newUser']) and $_GET['newUser'] == "false"){
                                echo "<p id=\"error\">User could not be created</p>";
                        }
                ?>
		<button type="submit" class="registerbtn">Register</button>
	</div>
	</div>
		<div class="container signin">
                        <p>Already have an account? <a href="index.php">Sign in</a>.
</p>
                </div>
</form>
</body>
</html>
