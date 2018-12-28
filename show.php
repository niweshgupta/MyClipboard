<!DOCTYPE html>
<html>
<head>
  <title>My Clipboard - Niwesh Gupta</title>
</head>
<body>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h1 style="color: white; padding: 40px; text-align: center; background: #1abc9c;"> My Clipboard </h1>
	<h3>RAW file </h3>
	<fieldset style="width: 892px; height: 240px;">
		<?php
		$file = fopen($_GET['name'] . ".txt", "r") or die("No such file exists.");
		while (!feof($file)) {
			echo fgets($file) . "<br>";
		}
		fclose($file);
		?>
	</fieldset>
	<br>
  	<center>
	  	<fieldset style="width: 200px;">
		  	<legend> Contact Me: </legend>
		  	<a href="http://www.facebook.com/niweshgupta" class="fa fa-facebook" style="padding: 10px;"></a>
		  	<a href="http://www.twitter.com/niweshgupta" class="fa fa-twitter" style="padding: 10px;"></a>
		  	<a href="http://www.instagram.com/niweshgupta" class="fa fa-instagram" style="padding: 10px;"></a>
	  	</fieldset>
  		
  	</center>
</body>
</html>