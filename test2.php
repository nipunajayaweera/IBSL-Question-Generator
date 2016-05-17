<?php 
	require("test.php");
	$a = array();
	$w = new Test();
	$b = array(4,3,7,1);

	
	for ($i=0; $i < 4; $i++) { 
		$x = $b[$i];
		array_push($a, $w->loadque($x));
	}


	
	
 ?>
