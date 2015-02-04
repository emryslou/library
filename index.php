<?php

function getPowerlist($a,$level = true){
	$power_name = array(
		'1' => 'select',
		'2' => 'insert',
		'4' => 'update',
		'8' => 'delete',
	);
	$powers = array();
	$sum = 0;
	//==================================================
	$power_num = count($power_name);
	for($i = $power_num -1;$i >= 0;$i--) {
		$twopow = pow(2,$i);
		if($sum + $twopow <= $a){
			$powers[] = $power_name[$twopow];
			$sum += $twopow;
		}

	}
	//==================================================
	return $powers;
}

function HexToBin($hexNumber = 0) {

	$binNumber = "";
	do {
		$binNumber .= $hexNumber % 2 ;
		$hexNumber /= 2;
	}while($hexNumber > 1);//这里才是关键

	return strrev($binNumber);
}

?>
