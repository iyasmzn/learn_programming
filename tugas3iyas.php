<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Fredoka+One|Nunito|Permanent+Marker|Righteous&display=swap" rel="stylesheet"> 
		<title>ArrayMultidimensional</title>
		<style>
			.wee {text-align: center; color: red; background: yellow; font-size: 80px; font-family: 'Permanent Marker', cursive;}
			.h1 {text-align: center; color: red; font-family: 'Righteous', cursive; font-size: 40px;}
			.h3 {color: blue;}
			.p {color: brown; margin-left: 20px;font-family: 'Nunito', sans-serif; font-size: 20px;}
			.bg1 {background-color: skyblue; margin-right: 500px;}
			.php {margin-left:20px; font-family: sans-serif;}
		</style>
	</head>
	<body>
		<h1 id="name" class="wee"></h1>
		<script>	
			alert ("JIKA ANDA AKAN MENILAI SAYA 100, MAKA PILIHLAH TOMBOL 'OK'");
			var nama = prompt("Apa bahasa inggrisnya bodoh?");
			document.getElementById("name").innerHTML = "Helloooo Babang " + nama + "!!!! XD";
			
		</script>
		<h1 class="h1">PHP Array</h1>
		<hr style="margin-left: 100px; margin-right: 100px;">
		<div class="bg1"><h3 class="h3"><u>A. What is Multidimensional Array??</u></h3>
			<p class="p">Array Multidimensional adalah array yang didalamnya terdapat array lagi, yang dapat dilakukan berulang ulang</p></div>
		<h3 class="h3"><u>B. Examples =</u></h3>
		</div>
	    <div class="php">
		<?php
				$mobil = array (array("McLaren",12,11),
							array("Alphard",19,18),
							array("Lancer",20,21));
				echo "<i>"."<b>1. Two Dimensional Array</b>"."</i>"."<br>";
				echo "1.1 ".$mobil[0][0]." yang ready stock :".$mobil [0][1] . ", dan yang sudah terjual :".$mobil[0][2] . "<br>";
				$motor = array (array ("Supra","masih bagus",5),
							array ("Kawasaki","masih bagus",10),
							array ("Yamaha","masih bagus", 7));
				echo "1.2 ".$motor[1][0]." yang ".$motor[1][1]." itu ada ".$motor[1][2]."<br>";
			echo "<i>"."<b>2. Three Dimensional Array</b>"."</i>"."<br>";
				$merek = array (array (array ("garam", "masako", "royco")));
				
				echo "2.1 ".$merek[0][0][0].", ".$merek [0][0][1] . ", dan ".$merek[0][0][2]." enakan mana?"."<br>";
				$item = array ( array (
								array ("Supra","masih bagus",5),
								array ("Kawasaki","masih bagus",10),
								array ("Yamaha","masih bagus", 7)));
				echo "2.2 Apakah kamu tahu motor ".$item[0][0][0]."???"."<br>";
				$merklapt = array(array(array("ASUs","Lenovo","Dell")));
				echo "2.3 Apakah laptop ".$merklapt[0][0][1]." itu mahal???"."<br>";
			echo "<i>"."<b>3. Ascending Index Array</b>"."</i>"."<br>";
				$hp = array ("Apple", "Blackberry", "Coolpad","Samsung","Xiaomi", "realme", "oppo");
				sort($hp);
				var_dump($hp);
				echo "<br>";
				$mouse = array ("Logitech", "Nisuta", "Votre!!!");
				sort($mouse);
				var_dump($mouse);
				echo "<br>";
				$buah = array ("Apple", "Cherry", "Lemon", "Orange", "Melon");
				sort($buah);
				var_dump($buah);
				echo "<br>";
			echo "<i>"."<b>4. Descending Index Array</b>"."</i>"."<br>";
				$color = array ("red", "green", "blue", "white", "black");
				rsort($color);
				var_dump($color);
				echo "<br>";
				$warna = array ("merah", "hijau", "kuning", "biru", "hitam");
				rsort($warna);
				var_dump($warna);
				echo "<br>";
			echo "<i>"."<b>5. Ascending  Associative Array</b>"."</i>"."<br>";
				$alat = array ("pertama"=>"piring", "kedua"=>"garpu", "ketiga"=>"panci","keempat"=>"sendok","kelima"=>"nampan","keenam"=> "gelas", "ketujuh"=>"sumpit");
				asort($alat);
				var_dump($alat);
				echo "<br>";
				$tools = array ("pertama"=>"spoon", "kedua"=>"fork", "ketiga"=>"glass","keempat"=>"pan","kelima"=>"sotel");
				asort($tools);
				var_dump($tools);
				echo "<br>";
			echo "<i>"."<b>6. Descending  Associative Array</b>"."</i>"."<br>";
				$cars = array ("satu"=>"alphard", "dua"=>"pajero", "tiga"=>"jazz");
				arsort($cars);
				var_dump($cars);
				echo "<br>";
				$built = array ("besar"=>"negara", "sedengan"=>"kota", "kecil"=>"kecamatan","sangat kecil"=>"desa");
				arsort($built);
				var_dump($built);
				echo "<br>";
				$game = array ("1gb"=>"plant vs zombies", "50gb"=>"GTA V");
				arsort($game);
				var_dump($game);
				echo "<br>";
			echo "<i>"."<b>7. Ascending Key Associative Array</b>"."</i>"."<br>";
				$hero = array (1=>"superman", 2=>"batman", 3=>"aquaman");
				ksort($hero);
				var_dump($hero);
				echo "<br>";
				$baju = array (100=>"AH", 200=>"reebok", 123=>"disable",321=>"eiger");
				ksort($baju);
				var_dump($baju);
				echo "<br>";
				$sempak = array (213=>"gtman", 1212=>"alfamart", 222=>"indomaret");
				ksort($sempak);
				var_dump($sempak);
				echo "<br>";
			echo "<i>"."<b>8. Descending Key Associative Array</b>"."</i>"."<br>";
				$pemain = array (1=>"ronaldo", 2=>"messi", 3=>"figo", 4=>"ibrahimovic", 5=>"mohammedsalah", 6=>"rashford");
				krsort($pemain);
				var_dump($pemain);
				echo "<br>";
				$sepatu = array (100=>"rebook", 200=>"ardiles", 123=>"diadora",321=>"eiger");
				krsort($sepatu);
				var_dump($sepatu);
				echo "<br>";
				$tinggi = array (164=>"adi", 168=>"rofi'i", 157=>"syauqi");
				krsort($tinggi);
				var_dump($tinggi);
				echo "<br>";					
		?>
		</div>

	</body>
</html>

