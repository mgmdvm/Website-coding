<!DOCTYPE html>

<html>
<head>
<title>Demonstration Website</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>This is a demonstration website on my RPi web server</h1>
<p>This website is primarily accessible locally, but can be found at
www.moppin.hopto.org</p>

<h2>The main use of the site is to practice programming and parsing
web data.</h2>

<?php 
echo "<p id='p01'>Sample text for php code</p>";
?>

<form action="register.php" method="post">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
Comment: <textarea name="comment" rows="5" cols="30"></textarea>
<input type="submit">

</form>	
	
</body>
</html>
