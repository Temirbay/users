<?php
	include 'connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$age = $_POST['age'];
	$password = $_POST['password'];


	$sql = "UPDATE users SET name = '$name', surname = '$surname', age = '$age', password = '$password' WHERE id = '$id'";

	$query = mysql_query($sql);

	if (!$query)
		echo mysql_error();
	else {
		echo "Successfully updated</br>";
		echo "<a href='select.php'>View Result</a>";
	}
?>