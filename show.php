<?php
$file = fopen($_GET['name'] . ".txt", "r") or die("No such file exists.");
while (!feof($file)) {
	echo fgets($file) . "<br>";
}
fclose($file);
?>