<?php

function area($b, $h)
{
	$a=($b*$h)/2;
	return $a;
}

$b=$_GET['txtb'];
$h=$_GET['txth'];
echo 'El valor de "a" es: ', area($b, $h);

?>