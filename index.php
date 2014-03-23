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
	$power_num = 4;
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

?>
