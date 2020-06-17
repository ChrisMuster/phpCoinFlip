<?php
	$headCount = 0;
	$flipCount = 0;
	$coins = "";
	while ($headCount < 3) {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			$headCount ++;
			$coins .= '<div class="coin H">H</div>';
		}
		else {
			$headCount = 0;
			$coins .= '<div class="coin T">T</div>';
		}
	}

	$coins .= "<p>It took {$flipCount} flips!</p>";	

	echo $coins;
?>
