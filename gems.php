<?php
	$_fp = fopen("php://stdin", "r");
	$count = trim(fgets($_fp));

	for ($i = 0; $i < $count; ++$i)
	{
		$line = trim(fgets($_fp));
		$arr = str_split($line);
		$thisRound = array();
		$allHas = array();

		if ($i == 0)
		{
			$has = $arr;
		}
	
		foreach ($arr as $val)
		{
			if (in_array($val, $has) && !in_array($val, $thisRound))
			{
				$allHas[] = $val;
			}
			
			$thisRound[] = $val;
		}
		
		$has = $allHas;
	}
	
	print(count($allHas));
?>
