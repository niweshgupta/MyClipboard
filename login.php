<!DOCTYPE html>
<html>
<head>
  <title>Login - My Clipboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h1 style="color: white; padding: 40px; text-align: center; background: #1abc9c;"> My Clipboard </h1>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="sign_in.php" class="reg_form">
		<div class="Reg">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="Reg">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="Reg">
			<button type="submit" name="login" class="btn">Sign in</button>
		</div>
		<p>
			Not a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	<div class="foot">
		<center>
		  	<fieldset style="width: 200px;">
			  	<legend> Contact Me: </legend>
			  	<a href="http://www.facebook.com/niweshgupta" class="fa fa-facebook" style="padding: 10px;"></a>
			  	<a href="http://www.twitter.com/niweshgupta" class="fa fa-twitter" style="padding: 10px;"></a>
			  	<a href="http://www.instagram.com/niweshgupta" class="fa fa-instagram" style="padding: 10px;"></a>
		  	</fieldset>
		</center>
  	</div>
</body>
</html>