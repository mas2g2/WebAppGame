<!--
        name : Milesh Shah
        date : 12/07/2018
        pawprint : mas2g2
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Change Password</title>
<link rel="stylesheet" href="rp.css">
<script>
function isCookieSet(cookieName){
                var cookieIndex = document.cookie.indexOf(cookieName);
                if(cookieIndex >= 0){
                        alert("Email was not found");
                }
        }
        isCookieSet("EmailNotFound");
</script>
</head>
<body>
<div id="forgot_pass">
	<form method="post" action="forgot_pass.php">
		<div id="h1">
			<h1>Enter Your Email to Reset Password</h1>
		
		<p>Enter your email and your username and a temporary password will be sent to your account</p>
		<label for="email"><b>Email </b></label>
		<input type="text" id="email" placeholder="Enter Your Email" name="email">
		<label for="username"><b>Username </b></label>
                <input type="text" id="username" placeholder="Enter Your Username" name="username">
		<?php
		if(isset($_GET['reset']) and $_GET['reset'] == "false"){
                                echo "<p id=\"error\">Account was not found</p>";
                        }	
		?>
		<input type="submit" value="Submit">
		</div>
	</form>
	<button><a href="index.php">Logout</a></button>
</div>
</body>
</html>
