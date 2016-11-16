<?php
	include 'connect.php';

	if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['password'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$age = $_POST['age'];
		$password = $_POST['password'];
	}
	$sql = "INSERT INTO users (name, surname, age, password) VALUES ('$name', '$surname', '$age', '$password')";
	$query = mysql_query($sql);

	if (!$query)
		echo mysql_error();
	else {
		echo "Successfully inserted</br>";
		echo "<a href='select.php'>View result</a>";
	}

?>