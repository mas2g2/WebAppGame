<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Password</title>
<link rel="stylesheet" href="npc.css">
</head>
<body>
<div id="new_pass">
	<form method="post" action="new_pass_config.php">
		<label for="newPassword">New Password:</label> 
		<input type="password" id="newPassword" name="newPassword" title="New password" placeholder="Enter New Password"/><br>
		<label for="confirmPassword">Confirm Password:</label> 
		<input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" placeholder="Confirm New Password"/>
		
		<p class="form-actions">
			<input type="submit" value="Change Password" title="Change password" />
		</p>
	</form>
	</div>
	<button><a href="index.php">Logout</a></button>
</body>
</html>
