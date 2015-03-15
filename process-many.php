<?php
//Includes 
include_once("getitle.php");



//Posted variables
$theme = $_POST["theme"];
$siteOne = $_POST["siteOne"];
$siteTwo = $_POST["siteTwo"];
$siteThree = $_POST["siteThree"];

echo "<div id = 'threeDetail'>";
echo "<p class = 'bigTitle' id = 'title'>Tell us more about the sites you have selected</p>";
echo $theme;
?>
		
		<form method="POST" action="research-pass-many.php" id = "threeSites">
        <input type="hidden" name="theme" value="<?php echo $theme; ?>" />
        <input type="hidden" name="siteOne" value="<?php echo $siteOne; ?>" />
        <input type="hidden" name="siteTwo" value="<?php echo $siteTwo; ?>" />
        <input type="hidden" name="siteThree" value="<?php echo $siteThree; ?>" />
     
		<p class = "labelForm"><b>Site one:</b> <?php echo $siteOne ?></p>
        <p class = "labelForm">Title:</p>
		<textarea rows="1" name="titleOne" class="commentText"><?php echo getTitle($siteOne); ?></textarea><br />
		<p class = "labelForm">Hosting site:</p>
		<textarea rows="1" name="hostTextOne" class="commentText"><?php echo parse_url($siteOne, PHP_URL_HOST); ?></textarea><br />
		<p class = "labelForm">Who made this site?</p>
		<input type="text" name="orgTextOne" class="orgText" placeholder='Enter website owner/organisation'><br />
		<p class = "labelForm">Other information</p>
		<textarea rows="7" name="commentTextOne" class="commentText" placeholder='Enter teacher comment'></textarea><br />
		<br /><br />

        
        
        <p class = "labelForm"><b>Site two:</b> <?php echo $siteTwo ?></p>
        <p class = "labelForm">Title:</p>
		<textarea rows="1" name="titleTwo" class="commentText"><?php echo getTitle($siteTwo); ?></textarea><br />
		<p class = "labelForm">Hosting site:</p>
		<textarea rows="1" name="hostTextTwo" class="commentText"><?php echo parse_url($siteTwo, PHP_URL_HOST); ?></textarea><br />
		<p class = "labelForm">Who made this site?</p>
		<input type="text" name="orgTextTwo" class="orgText" placeholder='Enter website owner/organisation'><br />
		<p class = "labelForm">Other information</p>
		<textarea rows="7" name="commentTextTwo" class="commentText" placeholder='Enter teacher comment'></textarea><br />
		<br /><br />

        
        
        
        <p class = "labelForm"><b>Site three:</b> <?php echo $siteThree ?></p>
        <p class = "labelForm">Title:</p>
		<textarea rows="1" name="titleThree" class="commentText"><?php echo getTitle($siteThree); ?></textarea><br />
		<p class = "labelForm">Hosting site:</p>
		<textarea rows="1" name="hostTextThree" class="commentText"><?php echo parse_url($siteThree, PHP_URL_HOST); ?></textarea><br />
		<p class = "labelForm">Who made this site?</p>
		<input type="text" name="orgTextThree" class="orgText" placeholder='Enter website owner/organisation'><br />
		<p class = "labelForm">Other information</p>
		<textarea rows="7" name="commentTextThree" class="commentText" placeholder='Enter teacher comment'></textarea><br />
		<br />
		<div class="halfButton"><button id = "begin" name="submit" type="submit" value="printable">Ok, go!</button></div>
        
        
        
        
        
		</form>

	</div>

<script>
//Wait till HTML has fully loaded
$(document).ready(function(){
    // Attach a submit handler to the form
	$( "#threeSites" ).submit(function( event ) {
		
  		// Stop form from submitting normally
  		event.preventDefault();
 
  		// Get some values from elements on the page:
  		var url = $(this).attr("action");
    	var fData = $(this).serialize();
 
  		// Send the data using post
  		var posting = $.post(url, fData, function(response) { 
 
  			// Put the results in a div
    		$( "#threeDetail" ).empty().append( response );
            
  		});//End $.post
    
    });	//End form submit event.

	
})//End Ready	
</script>
