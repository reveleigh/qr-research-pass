<div class = "pageHolder">
	<div class = "page">
	
	<?php 	
		if ($_GET["set"] == "true") {
	echo "<div class = 'printPage'>";
	$accessedOn = getdate(); 
	$now = $accessedOn[mday] . "/" . $accessedOn[mon] . "/" . $accessedOn[year];
?>
	
	<div class="card">
		<span class = "researchPass">RESEARCH PASS</span>
		<div class = "qr"><div id ="qr1"></div></div>
    	<div class = "desc">
    		<div class = "descTitle"><?php echo $_POST["titleText"]; ?></div>
    		<div class = "descHosted">Hosted at
    		<?php echo " " . $_POST["hostText"];
    		if ($_POST["orgText"]) { echo " (" . $_POST["orgText"] . ")";} 
    		?>
    		</div>
    		<div class = "descComment"><?php echo $_POST["commentText"]; ?></div>
    	</div>
		<img class = "favicon" src="<?php $theURL = "http://" . $_POST["hostText"] . "/favicon.ico";
		
		if (@getimagesize($theURL)) {
			echo $theURL;
		} else {
			echo "globe.jpg";	
		}
		?>" width = 24px />
		
		<span class= "urlFooter">
			
			<?php 
			$fullURL = deRidHash($_POST["url"]);
			if (strlen($fullURL) > 150) {
				echo substr($fullURL, 0, 148) . " . . . [partial url]";
			} else { 
				echo $fullURL;
			}
				?></span>
			<?php
		if (strripos($_POST["url"],"https") === 0 ) {
			echo "<img src = 'locked.png' width = 24px class = 'padIcon'><span class = 'encryption'>Encrypted server connection<br /> accessed on " . $now;
		} else {
			echo "<img src = 'unlocked.png' width = 24px class = 'padIcon'><span class = 'encryption'>Unencrypted server connection<br /> accessed on " . $now;
		}
		?>
		
		</span>
	</div>
	
	
	<div class="card">
		<span class = "researchPass">RESEARCH PASS</span>
		<div class = "qr"><div id ="qr2"></div></div>
    	<div class = "desc">
    		<div class = "descTitle"><?php echo $_POST["titleText"]; ?></div>
    		<div class = "descHosted">Hosted at
    		<?php echo " " . $_POST["hostText"];
    		if ($_POST["orgText"]) { echo " (" . $_POST["orgText"] . ")";} 
    		?>
    		</div>
    		<div class = "descComment"><?php echo $_POST["commentText"]; ?></div>
    	</div>
		<img class = "favicon" src="<?php $theURL = "http://" . $_POST["hostText"] . "/favicon.ico";
		
		if (@getimagesize($theURL)) {
			echo $theURL;
		} else {
			echo "globe.jpg";	
		}
		?>" width = 24px />
		
		<span class= "urlFooter">
			
			<?php 
			$fullURL = deRidHash($_POST["url"]);
			if (strlen($fullURL) > 150) {
				echo substr($fullURL, 0, 148) . " . . . [partial url]";
			} else { 
				echo $fullURL;
			}
				?></span>
			<?php
		if (strripos($_POST["url"],"https") === 0 ) {
			echo "<img src = 'locked.png' width = 24px class = 'padIcon'><span class = 'encryption'>Encrypted server connection<br /> accessed on " . $now;
		} else {
			echo "<img src = 'unlocked.png' width = 24px class = 'padIcon'><span class = 'encryption'>Unencrypted server connection<br /> accessed on " . $now;
		}
		?>
		
		</span>
	</div>


	<div class="card">
		<span class = "researchPass">RESEARCH PASS</span>
		<div class = "qr"><div id ="qr3"></div></div>
    	<div class = "desc">
    		<div class = "descTitle"><?php echo $_POST["titleText"]; ?></div>
    		<div class = "descHosted">Hosted at
    		<?php echo " " . $_POST["hostText"];
    		if ($_POST["orgText"]) { echo " (" . $_POST["orgText"] . ")";} 
    		?>
    		</div>
    		<div class = "descComment"><?php echo $_POST["commentText"]; ?></div>
    	</div>
		<img class = "favicon" src="<?php $theURL = "http://" . $_POST["hostText"] . "/favicon.ico";
		
		if (@getimagesize($theURL)) {
			echo $theURL;
		} else {
			echo "globe.jpg";	
		}
		?>" width = 24px />
		
		<span class= "urlFooter">
			
			<?php 
			$fullURL = deRidHash($_POST["url"]);
			if (strlen($fullURL) > 150) {
				echo substr($fullURL, 0, 148) . " . . . [partial url]";
			} else { 
				echo $fullURL;
			}
				?></span>
			<?php
		if (strripos($_POST["url"],"https") === 0 ) {
			echo "<img src = 'locked.png' width = 24px class = 'padIcon'><span class = 'encryption'>Encrypted server connection<br /> accessed on " . $now;
		} else {
			echo "<img src = 'unlocked.png' width = 24px class = 'padIcon'><span class = 'encryption'>Unencrypted server connection<br /> accessed on " . $now;
		}
		?>
		
		</span>
	</div>	
	
	
	
	<script type="text/javascript">
	function updateQRCode(what, where) {
        var element = document.getElementById(where);
		var s = "s";
        var bodyElement = document.body;
        if(element.lastChild)
          element.replaceChild(showQRCode(what, s), element.lastChild);
        else
          element.appendChild(showQRCode(what, s));
       }

      updateQRCode('<?php echo deRidHash($_POST["url"]); ?>', "qr1");
      updateQRCode('<?php echo deRidHash($_POST["url"]); ?>', "qr2");
      updateQRCode('<?php echo deRidHash($_POST["url"]); ?>', "qr3");
      
      
    function makeIMGsize(){
		var t = document.getElementsByTagName("img");
		for (i = 0; i < t.length; i = i + 3) {
	   		t[i].style.height="175px";
       		t[i].style.width="175px";
		}
	}
	makeIMGsize();
	
	
</script>


	<?php }  
	
	else if ($_GET["set"] == "false") {
	echo "<div class = 'printContainer'>";
	echo "<p class = 'bigTitle' id = 'title'>Tell us more about</p>";
	echo "<p class = 'preview'><span class='urlTitle'>" . deRidHash($_GET["url"]) . "</span><br /></p>";
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
	
	
<?php
} 
?>

	
	

	</div>
</div>

