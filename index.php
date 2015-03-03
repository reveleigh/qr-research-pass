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
<?php 

include_once("getitle.php");

if (empty($_POST) || $_POST["submit"] == "begin") {

    include_once("begin.php");

} else if ($_POST["submit"] == "qrQuick") {
	$link = $_POST["text"];
	include_once("quick.php");
	
} else if ($_POST["submit"] == "options"){
	$link = ridHash($_POST["text"]);
	include_once("options.php");
	
} else if ($_POST["submit"] == "printable") {
	$link = $_POST["text"];
	include_once("printable.php");
} 

?>

</body>
</html>
