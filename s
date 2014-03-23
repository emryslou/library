diff --git a/index.php b/index.php
index 147cebc..30feb5a 100644
--- a/index.php
+++ b/index.php
@@ -1 +1,27 @@
-<?php phpinfo(); ?>
+<?php
+
+function getPowerlist($a,$level = true){
+	$power_name = array(
+			'1' => 'select',
+			'2' => 'insert',
+			'4' => 'update',
+			'8' => 'delete',
+		);
+	$powers = array();
+	$sum = 0;
+	//==================================================
+	$power_num = 4;
+	for($i = $power_num -1;$i >= 0;$i--) {
+		$twopow = pow(2,$i);
+		
+		if($sum + $twopow <= $a){
+			$powers[] = $power_name[$twopow];
+			$sum += $twopow;
+		}
+		
+	}
+	//==================================================
+	return $powers;
+}
+
+?>
