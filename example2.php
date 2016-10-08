<?php
include_once 'Example1.php';

extract($_REQUEST);

if (isset($a) && isset($b))
	Rect($a,$b);
else if (isset($a) && !isset($b))
	Rect($a);
else echo "Дорогой, пропиши параметр!";
	//http://localhost/Example2.php?a=5&b=2
	
	?>