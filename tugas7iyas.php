<?php

//source from hamam
	echo "ABCDEFGFEDCBA<br>";
	$huruf = array ("A","B","C","D","E","F",);
	for ($x=5; $x>=0;$x--) {
		for ($a=0; $a<=$x; $a++) {
			echo $huruf[$a];
		}
		for ($c=6-$x; $c>0;$c--) {
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		for ($b=$x; $b >= 0; $b--) {
			echo $huruf[$b];
		}
		echo "<br>";
	}
// source from adi
// 	$alpha = array("A","B","C","D","E","F","G");
// 	$var1 = array_search("G", $alpha);
// 	for ($var2=0; $var2 <= $var1; $var2++) { 
// 		$var3 =0;
// 		$kond = false;
// 		while ( $var3 >= 0 && ($var3==$var1 || $kond ? $var3 >= 0:$var3 <= count($alpha))) {
// 				echo $var3 <= $var1-$var2 ? $alpha[$var3]: "&nbsp;&nbsp;&nbsp;";
// 				$kond = !$kond ? $var3 == $var1 : true;
// 				$var3 = $var3==$var1 || $kond ? $var3-1 : $var3+1;
// 		}
// 		echo "<br>";
// 	}

?>
