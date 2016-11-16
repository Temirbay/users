<?php
	include 'connect.php';
	
	$id = $_POST['id'];

	$sql = "DELETE FROM users WHERE id = '$id'";

	$query = mysql_query($sql);

	if (!$query)
		echo mysql_error();
	else {
		echo "Successfully deleted</br>";
		echo "<a href='select.php'>View Result</a>";
	}
?>