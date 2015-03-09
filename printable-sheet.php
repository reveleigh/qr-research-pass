<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Cabin|Cabin+Sketch' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="qr/qrcode.js"></script>
    <script type="text/javascript" src="qr/html5-qrcode.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<title>QR Research Pass</title>
    <?php
	include_once("getitle.php");
	include_once("classes.php");
	?>
	
</head>

<body>
	<div class = "pageHolder">
		<div class = "page">
    		<div class = 'printPage'>
	
			<form method="POST" action="process-many.php">
			<p class = "labelForm">Research theme or page title:</p>
			<textarea rows="1" name="theme" class="commentText"></textarea><br />
			<p class = "labelForm">First site:</p>
			<textarea rows="1" name="hostText" class="commentText"><?php echo $_GET["url"]; ?></textarea><br />
			<p class = "labelForm">Who made this site?</p>
			<input type="text" name="orgText" class="orgText" placeholder='Enter website owner/organisation'><br />
			<p class = "labelForm">Other information</p>
			<textarea rows="7" name="commentText" class="commentText" placeholder='Enter teacher comment'></textarea><br />
			<input type="hidden" name="url" value="<?php echo $_GET["url"] ?>" />
			<input type="hidden" name="host" value="<?php echo parse_url($_GET["url"], PHP_URL_HOST) ?>" /><br />
			<div class="halfButton"><button id = "begin" name="submit" type="submit" value="printable">Ok, go!</button></div>
			</form>			
            
            
           
           
           
        	</div>
		</div>
	</div>
</body>
</html>
