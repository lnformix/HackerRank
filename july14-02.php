<?php
  
  	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));
	$queue = explode(' ', trim(fgets($_fp)));
	$maxGroup = max($queue);
	$sum = 0;
	$ans = array();
	
  	for ($i = 0; $i < $count; ++$i)
	{
		$sum += $queue[$i];
	}
	
	$busSizes = array();
	
	for ($i = 2; $i < $count; ++$i)
	{
		if ($sum / $i < $maxGroup)
		{
			break;
		}
		if ($sum % $i == 0)
		{
			$busSizes[] = $sum / $i;
		}
	}
	
	$busSizes = array_reverse($busSizes);
	$size = count($busSizes);
	
	for ($i = 0; $i < $size; ++$i)
	{
		$rd = $busSizes[$i];
		
		for ($j = 0; $j < $count; ++$j)
		{
			$rd -= $queue[$j];
			
			if ($rd == 0)
			{
				if ($j < $count - 1)
				{
					$rd = $busSizes[$i];
					continue;
				}
				else
				{
					$ans[] = $busSizes[$i];
				}
			}
			elseif ($rd < 0)
			{
				break;
			}
		}
	}
	
	$ans[] = $sum;
	print(implode(' ', $ans));
  
?>
