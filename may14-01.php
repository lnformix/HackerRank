<?php
  
  	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));
	
  	for ($i = 0; $i < $count; ++$i)
	{
		$size = trim(fgets($_fp));
		
		$array = explode(' ', trim(fgets($_fp)));
		$right = 0;
		
		for ($j = 0; $j < $size; ++$j)
		{
			$right += $array[$j];
		}
		
		$left = 0;
		$ans = 'NO';

		for ($j = 0; $j < $size; ++$j)
		{
			$right -= $array[$j];
            
			if ($left == $right)
			{
				$ans = 'YES';
				break;
			}
			
			$left += $array[$j];
		}
		
		print($ans.PHP_EOL);
	}
  
?>