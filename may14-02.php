<?php
  
	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));
	$array = explode(' ', trim(fgets($_fp)));
	$pq = explode(' ', trim(fgets($_fp)));
	asort($array);
	$maxmin = 0;

	for ($j = $pq[0]; $j <= $pq[1]; ++$j)
	{
		$min = 1000000000;
		
		for ($i = 0; $i < $count; ++$i)
		{
			$num = abs($array[$i] - $j);
			
			if ($num < $min)
			{
				$min = $num;
			}
			elseif ($min > $num)
			{
				break;
			}
		}
		
		if ($maxmin < $min)
		{
			$maxmin = $min;
			$ans = $j;
		}
	}
  	
	print($ans);
  
?>