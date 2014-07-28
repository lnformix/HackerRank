<?php
  
  	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));
	
  	for ($i = 0; $i < $count; ++$i)
	{
		$map[$i] = str_split(trim(fgets($_fp)));
	}
	
	$res = array();
	
	for ($i = 0; $i < $count; ++$i)
	{
		for ($j = 0; $j < $count; ++$j)
		{
			if (($i != 0) && ($i != $count - 1) && ($j != 0) && ($j != $count - 1) &&
					$map[$i - 1][$j] < $map[$i][$j] && $map[$i][$j - 1] < $map[$i][$j] &&
					$map[$i + 1][$j] < $map[$i][$j] && $map[$i][$j + 1] < $map[$i][$j])
			{
				$res[$i][$j] = 'X';
			}
			else
			{
				$res[$i][$j] = $map[$i][$j];
			}
		}
	}
	
	for ($i = 0; $i < $count; ++$i)
	{
		for ($j = 0; $j < $count; ++$j)
		{
			print($res[$i][$j]);
			
			if ($j == $count - 1)
			{
				print(PHP_EOL);
			}
		}
	}
  
?>
