<?php include('app_logic.php');?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Password Reset</title>
	<link rel = "stylesheet" href = "main.css">
</head>
<body>
	<form class = "login-form" action = "enter_email.php" method = "post">
		<h1 class = "form-title">Password Reset</h1>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class = "form-group">
			<label>Your email address</label>
			<input type = "email" name = "email">
		</div>
		<div class = "form-group">
			<button type = "submit" name = "reset-password" class = "login-btn">Submit</button>
		</div>
	</form>
</body>
</html>