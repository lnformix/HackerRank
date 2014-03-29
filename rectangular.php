<?php
	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));
	$minA = 100000000;
	$minB = 100000000;
	
  	for ($i = 0; $i < $count; ++$i)
	{
		$ab = explode(' ', trim(fgets($_fp)));
		
		if ($ab[0] > 0 && $ab[0] < $minA)
		{
			$minA = $ab[0];
		}
		if ($ab[1] > 0 && $ab[1] < $minB)
		{
			$minB = $ab[1];
		}
	}
	
	print($minA * $minB);
?>