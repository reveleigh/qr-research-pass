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
	
</head>

<body>
	<div class = "pageHolder">
		<div class = "page">
    		<div class = 'printPage'>
	
			<?php 	
			$accessedOn = getdate(); 
			$now = $accessedOn[mday] . "/" . $accessedOn[mon] . "/" . $accessedOn[year];
			?>
	       
           
           
           
        	</div>
		</div>
	</div>
</body>
</html>
