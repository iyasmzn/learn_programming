<?php
	function angka($nilai,$baris) {

		for ($a=0;$a<$baris;$a++) {
			for ($b=0;$b<=$a;$b++) {
				$jadi=$b+$nilai;
				if ($jadi>=0 && $jadi<40) {
					$eks="(E)";
				}
				if ($jadi>=40 && $jadi<60) {
					$eks="(D)";
				}
				if ($jadi>=60 && $jadi<75) {
					$eks="(C)";
				}
				if ($jadi>=75 && $jadi<90) {
					$eks="(B)";
				}
				if ($jadi>=90 && $jadi<100) {
					$eks="(A)";
				}
				if ($jadi==100) {
					$eks="(A+)";
				}
				$final = $jadi.$eks. "&nbsp";
				echo $final;				
			}		
			echo "<br>";
		}
	}
	echo angka(71,5);
?>
