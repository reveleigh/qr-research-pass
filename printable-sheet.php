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
	?>
	
</head>

<body>
	<div class = "pageHolder">
		<div class = "page">
    		<div class = 'printPage' id = "urlData">
	
			<form method="POST" id="manyUrls" action="process-many.php">
			<p class = "bigTitle">Printable research page</p>
            <p class = "labelForm">Research theme or page title:</p>
			<textarea rows="1" name="theme" class="commentText"></textarea><br /><br />
			<p class = "labelForm">Site one:</p>
			<textarea rows="1" name="siteOne" class="commentText"><?php echo $_POST["link"]; ?></textarea>
            <p class = "labelForm">Site two:</p>
			<textarea rows="1" name="siteTwo" class="commentText" placeholder='Enter address'></textarea>
            <p class = "labelForm">Site three:</p>
			<textarea rows="1" name="siteThree" class="commentText" placeholder='Enter address'></textarea>	<br /><br />		
			<div class="halfButton"><button id = "begin" name="submit" type="submit" value="printable">Next</button></div>
			</form>			
                                      
           
        	</div>
		</div>
	</div>
</body>
</html>

<script>
//Wait till HTML has fully loaded
$(document).ready(function(){
    // Attach a submit handler to the form
	$( "#manyUrls" ).submit(function( event ) {
		
  		// Stop form from submitting normally
  		event.preventDefault();
 
  		// Get some values from elements on the page:
  		var url = $(this).attr("action");
    	var fData = $(this).serialize();
 
  		// Send the data using post
  		var posting = $.post(url, fData, function(response) { 
 
  			// Put the results in a div
    		$( "#urlData" ).empty().append( response );
            
  		});//End $.post
    
    });	//End form submit event.

	
})//End Ready	
</script>
