<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Fredoka+One|Nunito|Saira+Stencil+One|Josefin+Sans|Righteous&display=swap" rel="stylesheet"> 
		<title>Tugase Mastoreq 4</title>
		<style>
			#bg3 { background: #fff5bf;}
			.booyah {text-align: center; color: #d15664; font-size: 65px;font-family: 'Saira Stencil One', cursive; margin-left:50px;margin-right:50px;}
			.h2 { color: gray; font-family: 'Righteous', cursive; font-size: 40px;}
			.p {color: #a1a1a1; text-align: center;font-family: 'Nunito', sans-serif; font-size: 20px;}
			.bg1 {background-color: #e8fdff; margin-right: 800px;}
			.bg2 {background-color: #fde8ff; margin-right: 800px;}
			.php {font-family: 'Nunito', sans-serif;}
			hr {margin-right: 750px;}
			.hr2 {margin-right: 800px;}
			.hr3 {margin-left: 525px; margin-right: 525px;color: white;}
			.hr4 {margin-right: 600px;}
			.hr5 {margin-right: 700px;} 
		</style>
	</head>
	<body>
		<div id="bg3">
			<h1 class="booyah">Welcome Here, Mas Thoriq!</h1>
			<hr class="hr3">
			<p class="p">- by : @iyasmzn -</p>
			
		</div>
		<hr class="hr4"><hr class="hr5">
		<form method="post">
			<div class="bg1">
				<h2 class="h2">NILAI MUU</h2>
				<label>
					<input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?$_POST['nilai']:""; ?>" />
				</label>		
				<input type="submit" value="Check" />
				<br>
				<div class="php">
					<?php
			if (isset($_POST['nilai'])?$nilai = $_POST['nilai']:"") {
			if ($nilai == 100) {echo "A+++ <br>SELAMAT!! ANDA PINTAR SEKALEE";}
			elseif ($nilai >= 90 and $nilai < 100) {echo "A";} 
			elseif ($nilai >= 80 and $nilai < 90) {echo "B+";}
			elseif ($nilai >= 70 and $nilai < 80) {echo "B";}
			elseif ($nilai >= 60 and $nilai < 70) {echo "C+";}
			elseif ($nilai >= 50 and $nilai < 60) {echo "C";}
			elseif ($nilai >= 40 and $nilai < 50) {echo "D";}
			elseif ($nilai >= 20 and $nilai < 40) {echo "E";}
			elseif ($nilai >= 0 and $nilai < 20) {echo "Congrats!!! You have no brain in your head";}
			else {echo "You are not a human, please get out from this planet!!!";}}
 					?>
				</div>
			</div>
			<br><hr><hr class="hr2"><hr>
			<div class="bg2">
				<h2 class="h2">PENJUMLAHAAAAN</h2>
				<label>
					<input type="number" name="nomor" value="<?php echo isset($_POST['nomor'])?$_POST['nomor']:"";?>" />
					+
					<input type="number" name="nomor2" value="<?php echo isset($_POST['nomor2'])?$_POST['nomor2']:""; ?>" />
				</label>		
				<input type="submit" value="Jumlah">
				<br>
				<div class="php">
					<?php
			if(isset($_POST['nomor']) and ($_POST['nomor2'])) {
					$nomor = $_POST['nomor']; 
					$nomor2 = $_POST['nomor2']; 
					echo $nomor . "+" . $nomor2 . " = " . ($nomor+$nomor2);  
					} 
			else {echo "yang mau dihitung apa bambaaaaaaang!!!!!!!!<br>diisi dulu lah dua kolom diatas!! bege lu";}
					?>
				</div>
			</div>			
		</form>
		<hr class="hr5"><hr class="hr4">	
	</body>
</html>

