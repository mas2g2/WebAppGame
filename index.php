<!--
	name : Milesh Shah
	date : 12/07/2018
	pawprint : mas2g2
-->
<?php
	if(isset($_GET['logout']) and $_GET['logout'] == "true"){
		setcookie("ID","",time()-3600);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
	<script>
		function checkLogIn(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState = 4 && this.status == 200){
					var responseText = this.responseText;
					alert(responseText);
				//	document.getElementById("FailedLog").innerHTML = this.responseText;
				}
			};
			xhttp.open("POST","config.php",true);
			//xhttp.setRequestHeader("Content-type:","Location: index.php");
			xhttp.send("uname="+document.getElementById('user').value+"&psw="+document.getElementById('psw').value);
		}
	</script>
</head>
<body>
	<form action="config.php" method="POST">
		<div id="form">
		<div class="imgcontainer">
			<img src="login.png" alt="LogIn">
		</div>
		
		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input id="uname" type="text" placeholder="Enter Username" name="uname" required><br>
			<label for="psw"><b>Password</b></label>
			<input id="psw" type="password" placeholder="Enter Password" name="psw" required><br>
			<div id="FailedLog">
			<?php
				$login = $_GET['login'];
				//echo $login;
				if(isset($login) and $login == "false"){
					
					echo "<p>LogIn Failed</p>";
				}
			?>				
                        </div>
			<button id="login" type="submit">Login</button>
			<span><br><a href="createAcc.php">Create Account</a></span>
                        <span><br>Forgot <a href="reset_pass.php">password?</a></span>
			<label>
				<input type="checkbox" checked="checked" name="remeber">Remember Me
			</label>
		</div>
		</div>
	</form>
</body>
</html>
