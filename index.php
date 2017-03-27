<!DOCTYPE html>
<html>
	<head>
		<title>Coin Flip</title>
			<meta charset="utf-8"> 
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="main">
			<h1>Coin Flip!</h1>
			<p>How many flips will it take to get 3 Heads in a row?</p>
			<div class="cointable">
				<?php
					$headCount = 0;
					$flipCount = 0;
					while ($headCount < 3) {
						$flip = rand(0,1);
						$flipCount ++;
						if ($flip){
							$headCount ++;
							echo "<div class=\"coin\" id=\"H\">H</div>";
						}
						else {
							$headCount = 0;
							echo "<div class=\"coin\" id=\"T\">T</div>";
						}
					}
					echo "<p>It took {$flipCount} flips!</p>";	
				?>
			</div>
			<h2>Reload page to try again!</h2>
		</div>
	</body>
</html>
