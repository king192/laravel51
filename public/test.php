<?php
$a = array(
	array(1,4,3,2,6,5,8,4),
	array(4,2,6,73),
	array(2,5,7),
	);

$b = array_multisort($a[0],$a[1],$a[2]);

var_dump($a);