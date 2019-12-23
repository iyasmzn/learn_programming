<html>
	<head>
	 <title>SWITCH & LOOP</title>
	 <style>
	 	table {margin: auto;}
	 	div {border: 3px solid black; padding-top: 30px;padding-bottom: 30px;}
	 </style>
	</head>
	<body>
		<div>
		<form method="POST">
		<table>
		<tr>
			<td>
		<label>
			<input type="number" name="count" value="<?php echo isset ($_POST['count'])?$_POST['count']:""; ?>" />
			<input type="submit" value="CHECK"/>
		</label>
    <br>
		<?php
 			$count= isset ($_POST['count'])?$_POST['count']:"";
 			switch ($count){
 				case null or 0:
 					echo"Fill the input above dude	!!!";
 					break;
 				case($count > 0 and $count <= 10):
 					echo "Emang kamu sepintar apa sih?!" ;
 					break;
 				case ($count<=100 and $count>=95):
 					echo "Congrats! You get <b>A++</b>!!!";
 					break;
 				case ($count<95 and $count>=90):
 					echo "Good! You get <b>A</b>!";
 					break;
 				}
 			
 		
		?>	
			</td>
		</tr>
		</table>
		</form>
		</div>
		<?php
		//CARA 1
			$a=1;
			while ($a <= 5) {
				echo "<span>$a<br></span>"; $a++;
				}
			echo"<br>";
			$b=1;
			while ($b <= 10) {
				if ($b%2==1){
				echo "<span>$b<br></span>";}
				$b++;
				}
			echo"<br>";
			$c=2;
			while ($c <= 10) {
				if ($c%2==0){
				echo "<span>$c<br></span>";}
				$c++;
				}
			echo"<br>";
		//CARA 2
			for ($x=1; $x<=5; $x++){
 				echo "$x<br>";
 				}
 			echo"<br>";
 			for ($y=1; $y<=5; $y+=2){
 				echo "$y <br>";
 				}
 			echo"<br>";
 			for ($z=2; $z<=6; $z+=2){
 				echo "$z <br>";
 				}
 			echo"<br>";
 				
 			
		?>
		<p><i>Pertemuan Selanjutnya</i></p>
		<?php
			for ($f=10; $f>=0; $f--){
				echo "$f<br>";
				}
			echo "<br>";
			for ($g=10; $g>=0; $g-=2){
				echo "$g<br>";
				}
			echo "<br>";
			for ($h=9; $h>=1; $h-=2){
				echo "$h<br>";
				}
		?>
		<br><br><br>
		<form method="POST">
			<label>Number
				<input type="number" name="no" value="<?php echo isset($_POST['no'])?$_POST['no']:""; ?>" />
			</label>
			<input type="submit" value="Check!" /><br>
		
		<?php
			if (isset($_POST['no'])?$_POST['no']:"") {
			$no=$_POST['no'];
			for ($a=1;$a<=5;$a++) {
				for  ($b=1;$b<=$a;$b++){echo "$no";}
					echo "<br>";
				}}
		?>
		</form>
		
		<?php
			
		
		?>
	</body>
</html>

