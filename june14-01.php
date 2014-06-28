<?php

	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));

	for ($i = 0; $i < $count; ++$i)
	{
		$size = trim(fgets($_fp));
		$arr = explode(' ', trim(fgets($_fp)));
		sort($arr);
		$ans = 'YES';

		$c = FALSE;
	   
		for ($n = 2; $n < 100001; ++$n)
		{
			if (($n % 2 == 0 && $n != 2) ||
				($n % 3 == 0 && $n != 3) ||
				($n % 5 == 0 && $n != 5) ||
				($n % 7 == 0 && $n != 7) ||
				($n % 11 == 0 && $n != 11) ||
				($n % 13 == 0 && $n != 13))
			{
				continue;
			}
			for ($j = 0; $j < $size; ++$j)
			{
				if ($arr[$j] % $n != 0)
				{
					$c = TRUE;
					break;
				}
			}
			
			if ($c)
			{
				$c = FALSE;
				continue;
			}
			
			if ($n != 100000)
			{
				$ans = 'NO';
			}
	   }
	   
	   
	   print($ans.PHP_EOL);
	}
	
?>
