<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="print.css">
	<link href='http://fonts.googleapis.com/css?family=Cabin|Cabin+Sketch' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="qr/qrcode.js"></script>
    <script type="text/javascript" src="qr/html5-qrcode.js"></script>
	<title>Research Pass</title>
	
</head>
<body>

	<div class="card">
		research card.
		
    	<div class = "qr">
    	<div id ="qr1"></div>
    	<?php echo $_POST["url"]; ?>
    	<div id ="qr2"></div>
    	<div id ="qr3"></div>
    	<div id ="qr4"></div>
    	
    	</div>
    	
    	<div class = "desc">
    	<div>Site title</div>
    	<div><?php echo $_POST["titleText"] ?></div>
    	<div>Hosting site</div>
    	<div><?php echo $_POST["hostText"] ?></div>
    	<div>Who made this site?</div>
    	<div><?php echo $_POST["orgText"] ?></div>
    	<div>Other information</div>
    	<div><?php echo $_POST["commentText"] ?></div>
    	</div>
j
	</div>	
	
	
	
</body>
</html>
