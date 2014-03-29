<?php
  
  	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));
	
  	for ($j = 0; $j < $count; ++$j)
	{
		$ans = 'YES';
		$size = trim(fgets($_fp));
		
		$line1 = str_split(trim(fgets($_fp)));
		$line2 = str_split(trim(fgets($_fp)));
		
		for ($i = 0; $i < $size; ++$i)
		{
			if ($line1[$i] == 0 && $line2[$i] == 0)
			{
				$line1[$i] = 1;
				$line2[$i] = 1;
				continue;
			}
			if ($line1[$i] != 0 && $line2[$i] == 0 && $line1[$i + 1] == 0 && isset($line1[$i + 1]))
			{
				$line1[$i + 1] = 1;
				$line2[$i] = 1;
				continue;
			}
			if ($line1[$i] != 0 && $line2[$i] == 0 && $line2[$i + 1] == 0 && isset($line2[$i + 1]))
			{
				$line2[$i] = 1;
				$line2[$i + 1] = 1;
				continue;
			}
			if ($line2[$i] != 0 && $line1[$i] == 0 && $line1[$i + 1] == 0 && isset($line1[$i + 1]))
			{
				$line1[$i] = 1;
				$line1[$i + 1] = 1;
			}
		}
      
		for ($i = 0; $i < $size; ++$i)
		{
			if ($line1[$i] == 0 || $line2[$i] == 0)
			{
				$ans = 'NO';
				break;
			}
		}
		
		print($ans.PHP_EOL);
	}
  
?>