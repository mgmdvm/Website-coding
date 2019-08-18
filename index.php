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

<h3>This a list of the program types I am learning</h3>

<ol>
    <li>Python</li>
    <li>PHP</li>
    <li>HTML and CSS</li>
</ol>



<form action="includes/comment.inc.php" method="POST">
    <input type="text" name="name" placeholder="Full name"><br>
    <input type="text" name="email" placeholder="Your email"><br>
    <textarea name="comment" placeholder="Comment" rows="10" cols="30"></textarea>
    <input type = "submit">


</form>	
	
</body>
</html>
