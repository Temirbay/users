<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Age</th>
			<th>Password</th>
		</tr>
		<?php
			include 'connect.php';

			$sql = "SELECT * from users";
			$query = mysql_query($sql);
			while ($row = mysql_fetch_array($query)) {
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";

				echo "</tr>";
			}
		?>
	</table>
	<div class = "list">
		<a href='../html/delete.html'>Delete user</a> 
		<a href='../html/update.html'>Update user</a> 
		<a href='../index.html'>Add user</a>	
	</div>
	
</body>
</html>
