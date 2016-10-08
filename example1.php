<?php

function Rect($a, $b=null)
{
	if ($b == null)
		$b = $a;
	
	$i = 0;
	$j = 0;
	do
	{
		do
		{
			if($i == 0 || $i == $a -1)
			{
				echo "*"; 
			}
			else if ($j == 0 || $j == $b -1)
			{
				echo "*";
			}
			else
			{
				//str_repeat('&nbsp;', 1);
				echo "_";
			}
			$j++;
		}
		while ($j < $b);
		$i++;
		$j=0;
		echo "</br>";
	}
	while ($i < $a);
}

	//http://localhost/stars.php?a=5&b=2
	
	?>