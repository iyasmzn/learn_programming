<!-- PHP Array adalah sistem data yang dapat menyimpan satu atau lebih dari jenis yang sama -->
<!-- Array indexed adalah jenis array yang ada didalamnya ber-index numeric yang cara memanggilnya menggunakan urutan nomor yang dimulai dari 0-->
<!-- Associative Array adalah sebuah array yang isinya ber-index string atau yang cara memanggilnya adalah menggunakan nama nya bukan menggunakan nomornya -->
<html>
    <head>
        <title>Tugase mas toreq 2</title>
        <style>
            .judul {text-align: center; color: red;}
            .ket {text-align: center; color: skyblue;}
            .margin {margin-left: 20px; margin-right: 500px;}
        </style>    
    </head>
    <body class="margin">
        <h1 class="judul">Tugas Array</h1>
        <h3 class="ket"><i>Seko Babang Toreqq</i></h3>
        <hr>    
        <?php
                echo "<i>" . "<b>" . "Berikut adalah 3 contoh dari PHP indexed" . "</b>" . "</i>";
                echo "<br>";echo "<br>";                
            $umar = array("Mas Nashit", "Mas Toreq", "Mas Suryo", "Mas Fias", "Mas Fahri", "Mas Adib", "dan yang laennya");
            $usman = array ("Iyas", "Hamam", "Anang", "Nugrah", "Gibran", "Mutafakkur", "Adi", "Syauqi", "Fahmi", "Rofi'i", "Munawar");
            $babang = array ("Babang Adi", "Babang Hamam", "Babang Gibran", "Anang");
                echo "<i>Contoh 1.</i> Angkatan ke 2 pada Pondok IT AlMadinah ada " . $umar[0] . ", " . $umar[1] . ", " . $umar[3] . ", " . $umar[2] . ", " . $umar[4] . ", " . $umar[5] . ", " . $umar[6] . ".";
                echo "<br>";
                echo "Dan dari semuanya, " . $umar[1] . " is the best! XD"; //pujilah gurumu untuk mendapatkan nilai terbaik
                echo "<br>";
                echo "<i>Contoh 2.</i> Dan pada angkatan ke-3 ada " . $usman[0] . ", " . $usman[1] . ", " . $usman[2] . ", " . $usman[3] . ", " . $usman[4] . ", " . $usman[5] . " dan yang laennya.";
                echo "<br>";
                echo "<i>Contoh 3.</i> Dipimpin oleh " . $babang[0] . " yang dibantu oleh penasihat " . $babang[1] . " dan yang membawakan uang kekayaan adalah " . $babang[2] . ". Dan penulisnya adalah " . $babang[3] . ".";        
                echo "<br>";echo "<br>";echo "<br>";
                echo "<i>" . "<b>" . "Dan berikut ini adalah contoh dari PHP Association" . "</b>" . "</i>";
                echo "<br>";echo "<br>";
            $nilai = array ("Annas"=>"85", "Anwar"=>"83", "Iyas"=>"95", "Melvin"=>"95", "Nuraiza"=>"90", "Hafida"=>"88", "Kareem"=>"86");
            $hob = array ("Melvin"=>"Menggambar", "Tsabitul"=>"Menulis", "Ismi"=>"Membaca", "Iyas"=>"Menggambar", "Saif"=>"Sinau");            
            $makan = array ("Pagi"=>"Tempe Goreng", "Siang"=>"Terong Goreng", "Malam"=>"Ayam Goreng");                            
                echo "<i>Contoh 1.</i> Nilai pelajaran yang diperoleh kelas IPA 1 sangat bagus. Dan nilai tertinggi didapat oleh Iyas dan Melvin dengan nilai " . "<b>" . $nilai['Iyas'] . "</b>" . " dan " . "<b>" . $nilai['Melvin'] . "</b>" . ". Dan nilai siswa siswi lainnya juga tidak jauh berbeda. Nuraiza mendapat nilai " . $nilai['Nuraiza'] . ", Hafida mendapat " . $nilai['Hafida'] . " , dan Kareem mendapat " . $nilai['Kareem'] . ".";
                echo "<br>";
                echo "<i>Contoh 2.</i> Hobi saia adalah " . $hob['Iyas'] . ", sama dengan hobi si Melvin. Dan hobi dari Tsabitul adalah " . $hob['Tsabitul'] . ".";            
                echo "<br>";
                echo "<i>Contoh 3.</i> Setiap pagi saya makan " . $makan['Pagi'] . ", siangnya saya makan " . $makan['Siang'] . ", dan malamnya saya makan " . $makan['Malam'] . ".";
        ?>    
            <br><br><br>
        <form>
            <label>Tanggapan Anda = </label>
                <br>
            <textarea rows="10" placeholder="Silakan masukan tanggapan anda disini"></textarea>
        </form>
        <script>
            alert ("DUAAAAAAAAAAAAAAAAAAAAARRRRRRRR!!!!")
        </script>    
    </body>
</html>




