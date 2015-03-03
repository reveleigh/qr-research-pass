		<?php
		
		$link = $_POST["quickAdd"];
		$linkHost = parse_url($link, PHP_URL_SCHEME);
		if ($linkHost == "")	{
		$link = "http://" . $link;
		}
		$linkHost = parse_url($link, PHP_URL_HOST);

			
			if ($_POST["quickAdd"] != "") { 
				$allLink = "Make several copies of your " . $linkHost . " source as QR research passes to be sliced and given out";
				$difLink = "Make a research worksheet with a bunch of different QR code based research cards, starting with your " . $linkHost . " source.";
				} else { 
				$allLink = "Make several copies of one resource as a QR code based research card.";
				$difLink = "Make a research worksheet with a bunch of different QR code based research cards.";
				}
				?>


		<p class = "bigTitle">Create a printable page of QR research passes</p>
		<div class ="option">
				<div class = "templateHolder">
					<form method="POST" action="index.php?url=<?php echo $link ?>&many=false&set=false">
					<button class = "optionText" name="submit" type="submit" value="printable"><?php echo $allLink; ?></button>
					</form>
					<div class = "smallTemplate"></div>
					<div class = "scissors"><div class = "scisIcon"><img src = "scissors.png" height="15" width="25px"></div></div>
					<div class = "smallTemplate"></div>
					<div class = "scissors"><div class = "scisIcon"><img src = "scissors.png" height="15" width="25px"></div></div>
					<div class = "smallTemplate"></div>
				</div>
			</div>
			
			<div class = "option">
				<div class = "templateHolder">
					<form method="POST" action="many.php?url=<?php echo $link ?>">
					<button class = "optionText" name="submit" type="submit" value="printable"><?php echo $difLink; ?></button>
					</form>
					<div class = "smallTemplate"></div>
					<div class = "smallTemplate"></div>
					<div class = "smallTemplate"></div>
				</div>
			</div>
		<form id="quickQr" method="POST" action="index.php">
		<div class="halfButton"><button id = "begin" name="submit" type="submit" value="begin">Start over!</button></div>
		</form>
