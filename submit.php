<html>
<body>
	<?php 
	$file = fopen("file1.txt", "w");
	fwrite($file, $_POST["data"]);
	echo "File saved successfully with name 'file1.txt'"; 
	fclose($file);
	?>

</body>
</html>