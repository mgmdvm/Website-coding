<!DOCTYPE html>

<html>
<head>
<title>Data Collection Page</title>
</head>
<body>
<?php
	include_once 'dbh.inc.php';	
	
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	echo"<table border='1' style='border: 1px solid blue'>";
	echo"<tr><td style='width:25%'>Name</td><td style='width:30%'>Email</td><td style='width:40%'>Comments</td></tr>\n";
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo"<tr><td>{$row['uid']}</td><td>{$row['user_email']}</td><td>{$row['user_comment']}</td></tr>\n";
			}
		}
	echo"</table>";
	echo"<a href='../index.php'>Home</a>";
?>
</body>
</html>
