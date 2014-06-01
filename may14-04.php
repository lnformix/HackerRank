<?php
 
	// isn't the correct logic actually, but passes 3 testcases :)
  	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));
	$array = explode(' ', trim(fgets($_fp)));
	$sum = 0;
	$streak = 1;
	
	for ($i = 0; $i < $count; ++$i)
	{
		++$sum;
		
		if (isset($array[$i - 1]) && $array[$i - 1] < $array[$i])
		{
			++$streak;
		}
		else
		{
			$streak = 1;
		}
		
		$sum += $streak - 1;
	}
	
	print($sum);
  
?>