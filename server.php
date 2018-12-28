<?php
	$db = mysqli_connect('localhost', 'root', 'root', 'registration');

	$username = "";
	$email = "";
	$errors = array();

	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass1 = $_POST['password_1'];
		$pass2 = $_POST['password_2'];

		if (empty($username)) {
			array_push($errors, "Username is required.");
		}
		if (empty($email)) {
			array_push($errors, "Email is required.");
		}
		if (empty($pass1)) {
			array_push($errors, "Password is required.");
		}
		if ($pass1 != $pass2) {
			array_push($errors, "Passwords do not match.");
		}

		if (count($errors) == 0) {
			$password = md5($pass1);
			$sql = "INSERT into users (username, email, password)
				values ('$username','$email', '$password')";
			mysqli_query($db, $sql);
		}
	}


?>