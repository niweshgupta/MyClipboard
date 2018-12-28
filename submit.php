<html>
<body>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h1 style="color: white; padding: 40px; text-align: center; background: #1abc9c;"> My Clipboard </h1>
	<?php 
	$directory = "/var/www/html/";
	$filecount = 0;
	$files = glob($directory . "*.txt");
	if ($files){
 		$filecount = count($files);
	}
	$filecount++;
	$filename = "file".$filecount.".txt";
	$file = fopen($filename, "w");
	fwrite($file, $_POST["data"]);
	fclose($file);
	$saved_file = "show.php?name=file$filecount";
	header("location: $saved_file");
	?>
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