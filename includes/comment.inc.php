 <?php
	include_once 'dbh.inc.php';	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	
	
	$sql = "INSERT INTO users (uid, user_email, user_comment) VALUES ('$name', '$email', '$comment');";
	mysqli_query($conn, $sql);
        
        
	header("Location: ../index.php?submit=success");
        
?>
