<!DOCTYPE html>
<html>
	<head>
		<title>Coin Flip</title>
			<meta charset="utf-8"> 
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="styles/coinflip.css?rnd=132">
	</head>
	<body>
		<div class="main">

			<h1>Coin Flip!</h1>
			
			<p>When you click the Flip button, the computer will begin flipping coins and recording the results.</p>
			<p>It will continue until it has 3 Heads in a row, then display the full results.</p>

			<p>How many flips will it take to get 3 Heads in a row?</p>

			<div class="cointable"><h3>Click below to begin</h3></div>

			<button id="flipCoin" class="flip">
				<h2>Flip again!</h2>
			</button>

		</div>

		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/coinflip.js"></script>
	</body>
</html>
