<html>
<body>
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
	echo "File saved successfully with name $filename"; 
	fclose($file);
	$saved_file = "show.php?name=file$filecount";
	header("location: $saved_file");
	?>

</body>
</html>