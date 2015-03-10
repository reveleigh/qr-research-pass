<?php
//Includes 
include_once("getitle.php");
include_once("classes.php");


//Posted variables
$theme = $_POST["theme"];
$siteOne = $_POST["siteOne"];
$siteTwo = $_POST["siteTwo"];
$siteThree = $_POST["siteThree"];


	echo "<p class = 'bigTitle' id = 'title'>Tell us more about the sites you have selected.</p>";
?>
		
		<form method="POST" action="index.php?set=true">
        
        
		<p class = "labelForm">Site one: <?php echo $siteOne ?></p>
        <p class = "labelForm">Title:</p>
		<textarea rows="1" name="titleOne" class="commentText"><?php echo getTitle($siteOne); ?></textarea><br />
		<p class = "labelForm">Hosting site:</p>
		<textarea rows="1" name="hostTextOne" class="commentText"><?php echo parse_url($siteOne, PHP_URL_HOST); ?></textarea><br />
		<p class = "labelForm">Who made this site?</p>
		<input type="text" name="orgTextOne" class="orgText" placeholder='Enter website owner/organisation'><br />
		<p class = "labelForm">Other information</p>
		<textarea rows="7" name="commentTextOne" class="commentText" placeholder='Enter teacher comment'></textarea><br />
		<br />

        
        
        <p class = "labelForm">Site two: <?php echo $siteTwo ?></p>
        <p class = "labelForm">Title:</p>
		<textarea rows="1" name="titleTextTwo" class="commentText"><?php echo getTitle($siteTwo); ?></textarea><br />
		<p class = "labelForm">Hosting site:</p>
		<textarea rows="1" name="hostTextTwo" class="commentText"><?php echo parse_url($siteTwo, PHP_URL_HOST); ?></textarea><br />
		<p class = "labelForm">Who made this site?</p>
		<input type="text" name="orgTextTwo" class="orgText" placeholder='Enter website owner/organisation'><br />
		<p class = "labelForm">Other information</p>
		<textarea rows="7" name="commentTextTwo" class="commentText" placeholder='Enter teacher comment'></textarea><br />
		<br />

        
        
        
        <p class = "labelForm">Site three: <?php echo $siteThree ?></p>
        <p class = "labelForm">Title:</p>
		<textarea rows="1" name="titleTextThree" class="commentText"><?php echo getTitle($siteThree); ?></textarea><br />
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
