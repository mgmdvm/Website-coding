 <?php
	include_once 'dbh.inc.php';	
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$comment = mysqli_real_escape_string($conn, $_POST['comment']);
	
	
	$sql = "INSERT INTO users (uid, user_email, user_comment) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	    echo "SQL error";
	} else {
	    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $comment);
	    mysqli_stmt_execute($stmt);
	}
	        
	header("Location: ../index.php?submit=success");
        
?>
