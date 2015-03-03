<?php 
include_once("getitle.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Cabin|Cabin+Sketch' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="qr/qrcode.js"></script>
    <script type="text/javascript" src="qr/html5-qrcode.js"></script>
	<title>QR Research Pass</title>
	
</head>
<body>

<div class = "pageHolder">
	<div class = "page">
<?php		
	echo "<p class = 'bigTitle' id = 'title'>Add this, and two further sites.</p>";
	echo "<p class = 'previewMany'><span class='urlTitle'>Site 1: <br />" . deRidHash($_GET["url"]) . "</span><br /></p>";		
?>
		
		<form method="POST" action="index.php?set=true">
		<p class = "labelForm">Site title:</p>
		<textarea rows="1" name="titleText" class="commentText"><?php echo getTitle($_GET["url"]); ?></textarea><br />
		<p class = "labelForm">Hosting site:</p>
		<textarea rows="1" name="hostText" class="commentText"><?php echo parse_url($_GET["url"], PHP_URL_HOST); ?></textarea><br />
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


</body>
</html>