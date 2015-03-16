<?php
$theme = $_POST["theme"];
$accessedOn = getdate(); 
$now = $accessedOn[mday] . "/" . $accessedOn[mon] . "/" . $accessedOn[year];

echo "<p class = 'bigTitle' id = 'title'>" . $theme . "</p>"; ?>

	
	<div class="card">
		<span class = "researchPass">RESEARCH PASS</span>
		<div class = "qr"><div id ="qr1"></div></div>
    	<div class = "desc">
    		<div class = "descTitle"><?php echo $_POST["titleOne"]; ?></div>
    		<div class = "descHosted">Hosted at
    		<?php echo " " . $_POST["hostTextOne"];
    		if ($_POST["orgTextOne"]) { echo " (" . $_POST["orgTextOne"] . ")";} 
    		?>
    		</div>
    		<div class = "descComment"><?php echo $_POST["commentTextOne"]; ?></div>
    	</div>
		<img class = "favicon" src="<?php echo $_POST["favOne"]; ?>" width = 24px />
		
		<span class= "urlFooter">
			
			<?php 
			$fullURL = $_POST["siteOne"];
			if (strlen($fullURL) > 150) {
				echo substr($fullURL, 0, 148) . " . . . [partial url]";
			} else { 
				echo $fullURL;
			}
				?></span>
                
                
			<?php
		if (strripos($_POST["siteOne"],"https") === 0 ) {
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
    		<div class = "descTitle"><?php echo $_POST["titleTwo"]; ?></div>
    		<div class = "descHosted">Hosted at
    		<?php echo " " . $_POST["hostTextTwo"];
    		if ($_POST["orgTextTwo"]) { echo " (" . $_POST["orgTextTwo"] . ")";} 
    		?>
    		</div>
    		<div class = "descComment"><?php echo $_POST["commentTextTwo"]; ?></div>
    	</div>
		<img class = "favicon" src="<?php echo $_POST["favTwo"]; ?>" width = 24px />
		
		<span class= "urlFooter">
			
			<?php 
			$fullURL = $_POST["siteTwo"];
			if (strlen($fullURL) > 150) {
				echo substr($fullURL, 0, 148) . " . . . [partial url]";
			} else { 
				echo $fullURL;
			}
				?></span>
                
                
			<?php
		if (strripos($_POST["siteTwo"],"https") === 0 ) {
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
    		<div class = "descTitle"><?php echo $_POST["titleThree"]; ?></div>
    		<div class = "descHosted">Hosted at
    		<?php echo " " . $_POST["hostTextThree"];
    		if ($_POST["orgTextThree"]) { echo " (" . $_POST["orgTextThree"] . ")";} 
    		?>
    		</div>
    		<div class = "descComment"><?php echo $_POST["commentTextThree"]; ?></div>
    	</div>
		<img class = "favicon" src="<?php echo $_POST["favThree"]; ?>" width = 24px />
		
		<span class= "urlFooter">
			
			<?php 
			$fullURL = $_POST["siteThree"];
			if (strlen($fullURL) > 150) {
				echo substr($fullURL, 0, 148) . " . . . [partial url]";
			} else { 
				echo $fullURL;
			}
				?></span>
                
                
			<?php
		if (strripos($_POST["siteThree"],"https") === 0 ) {
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

      updateQRCode('<?php echo $_POST["siteOne"]; ?>', "qr1");
      updateQRCode('<?php echo $_POST["siteTwo"]; ?>', "qr2");
      updateQRCode('<?php echo $_POST["siteThree"]; ?>', "qr3");
      
      
    function makeIMGsize(){
		var t = document.getElementsByTagName("img");
		for (i = 0; i < t.length; i = i + 3) {
	   		t[i].style.height="175px";
       		t[i].style.width="175px";
		}
	}
	makeIMGsize();
	
	
</script>


    
    
    