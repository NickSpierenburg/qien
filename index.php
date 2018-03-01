<?php

$g1 = $_GET['g1'];
$g2 = $_GET['g2'];
$func = $_GET['func'];

switch ($func) {
	case 'plus':
		plus($g1, $g2);
		break;
	case 'min':
		minus($g1, $g2);
		break;
	case 'keer':
		keer($g1, $g2);
		break;
	case 'deel':
		deel($g1, $g2);
		break;
	default:
		echo 'Er is geen func meegegeven!';
		break;
}

function plus($g1, $g2) {
	$ans = $g1 + $g2;
	echo $g1 . ' + ' . $g2 . ' = ' . $ans;
}

function minus($g1, $g2) {
	$ans = $g1 - $g2;
	echo $g1 . ' - ' . $g2 . ' = ' . $ans;
}

function keer($g1, $g2) {
	$ans = $g1 * $g2;
	echo $g1 . ' * ' . $g2 . ' = ' . $ans;
}

function deel($g1, $g2) {
	$ans = $g1 / $g2;
	echo $g1 . ' / ' . $g2 . ' = ' . $ans;
}

?>
