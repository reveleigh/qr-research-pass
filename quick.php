<!-- <div class="initialInput"><form id="quickQr" method="POST" action="index.php">
	<div class = "initialForm">	
		<div class = "formDiv">-->
		<p class = "bigTitle">Here you go, colleague</p>
		<div id="qrcode" class="qrImage"></div>
		<form id="quickQr" method="POST" action="index.php">
		<div class="halfButton"><button id = "begin" name="submit" type="submit" value="begin">Start again</button></div>
		</form>
		<form id = "options" method="POST" action = "options.php">
		<div class="halfButton"><button id = "optionsButton" name="submit" type="submit" value="begin">Options</button></div>
		</form><!--
		</div>

	</div>
</div>-->
    
    <script type="text/javascript">
      function updateQRCode(text) {

        var element = document.getElementById("qrcode");

        var bodyElement = document.body;
        if(element.lastChild)
          element.replaceChild(showQRCode(text), element.lastChild);
        else
          element.appendChild(showQRCode(text));

      }

      updateQRCode('<?php echo $_POST['quickAdd']; ?>');
    </script>