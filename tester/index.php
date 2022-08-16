<?php

// $a = 5;
// $b = 2;

// // penjumlahan
// $c = $a + $b;
// echo "$a + $b = $c";
// echo "<hr>";

// // pengurangan
// $c = $a - $b;
// echo "$a - $b = $c";
// echo "<hr>";

// // Perkalian
// $c = $a * $b;
// echo "$a * $b = $c";
// echo "<hr>";

// // Pembagian
// $c = $a / $b;
// echo "$a / $b = $c";
// echo "<hr>";

// // Sisa bagi
// $c = $a % $b;
// echo "$a % $b = $c";
// echo "<hr>";

// // Pangkat
// $c = $a ** $b;
// echo "$a ** $b = $c";
// echo "<hr>";




// $speed = 10;

// $speed = $speed + 10;


// // operator penugasan
// $speed += 10;


// echo $speed;




// $score = 2 * 2;

// $score++;
// $score++;
// $score++;
// $score++;
// $score++;



// echo $score;        











// $a = 6;
// $b = 2;

// // menggunakan operator relasi lebih besar
// $c = $a > $b;
// echo "$a > $b: $c";
// echo "<hr>";

// // menggunakan operator relasi lebih kecil
// $c = $a < $b;
// echo "$a < $b: $c";
// echo "<hr>";

// // menggunakan operator relasi lebih sama dengan
// $c = $a == $b;
// echo "$a == $b: $c";
// echo "<hr>";

// // menggunakan operator relasi lebih tidak sama dengan
// $c = $a != $b;
// echo "$a != $b: $c";
// echo "<hr>";

// // menggunakan operator relasi lebih besar sama dengan
// $c = $a >= $b;
// echo "$a >= $b: $c";
// echo "<hr>";

// // menggunakan operator relasi lebih kecil sama dengan
// $c = $a <= $b;
// echo "$a <= $b: $c";
// echo "<hr>";



// $totalBelanja = 1;

// if($totalBelanja > 10) {
//     echo "Anda Mendapatkan Hadiah";
// } else {
//     echo "Anda Kurang Beruntung";
// }



// $a = true;
// $b = false;$a = true;
// $b = false;

// // variabel $c akan bernilai false
// $c = $a && $b;
// printf("%b && %b = %b", $a,$b,$c);
// echo "<hr>";

// // variabel $c akan bernilai true
// $c = $a || $b;
// printf("%b || %b = %b", $a,$b,$c);
// echo "<hr>";

// // variabel $c akan bernilai false
// $c = !$a;
// printf("!%b = %b", $a, $c);
// echo "<hr>";



// $a = 60;
// $b = 13;

// // bitwise AND
// $c = $a & $b;
// echo "$a & $b = $c";
// echo "<br>";

// // bitwise OR
// $c = $a | $b;
// echo "$a | $b = $c";
// echo "<br>";

// // bitwise XOR
// $c = $a ^ $b;
// echo "$a ^ $b = $c";
// echo "<br>";

// // Shift Left
// $c = $a << $b;
// echo "$a << $b = $c";
// echo "<br>";

// // Shift Right
// $c = $a >> $b;
// echo "$a >> $b = $c";
// echo "<br>";





// $makan = false;

// $jawab = $makan ? 'Udah' : 'Belum';

// echo $jawab;




// $umur = 15;

// if( $umur < 14 ) {
//     echo 'Kamu Belum cukup umur untuk ngegym ';
// } else {
//     echo 'Kamu sudah cukup umur untuk ngegym';
// }



















// $nilai = 80;

// if( $nilai > 90 ) {
//     $grade = "A+";
// } else if( $nilai > 80 ) {
//     $grade =  "A";
// }


// $level = 2;


// switch($level) {
//     case 1:
//         echo "pelajari mtk";
//         break;
// }


// $umur = 161;
// $menikah = false;

// if( $umur > 17 ) {
//     if( $menikah ) {
//         echo "Selamat datang pak / bu";
//     } else {
//         echo "Selamat datang de";
//     }
// } else {
//     echo "anak kcil dilarang masuk";

// }


// for($i = 1; $i <= 10; $i++) {
//     echo "$i. TEster <br>";
// }

// $ulangi = 0;
// while( $ulangi < 10 ) {
//     echo "ini perulangan ke-$ulangi <br>";
//     $ulangi++;
// }


// $ulangi = 10;

// do {
//     echo "ini perulangan ke-$ulangi <br>";
//     $ulangi--;
// } while($ulangi > 3);


// $boooks = ["Tutorial PHP 5", "React JS", "VUE JS"];

// echo "<h5>Judul Buku</h5>";

// echo "<ul>";

//    foreach($boooks as $row) {
//     echo "<li>$row</li>";
//    }

// echo "</ul>";


// $i = 0;

// while($i < 10) {
//     for($j = 0; $j < 10; $j++){
//         echo "Ini perulangan ke ($i, $j) <br>";
//     }
//     $i++;
// }


// $barang = ["buku","pensil","pulpen"];

// // menampilkan array dengan for
// echo "<h2>Menampilkan Array dengan for</h2>";
// for( $i = 0; $i < count($barang); $i++ ){
//     $nofor = $i + 1;
//     echo "$nofor.$barang[$i] <br>";
// }

// echo "<hr>";

// //menampilkan array dengan foreach
// echo "<h2>Menampilkan Array dengan foreach</h2>";
// $noforeach = 0;
// foreach( $barang as $row ) {
//     $noforeach++;
//     echo "$nofor.$row<br>";
// }


// echo "<hr>";

// // menampilkan array dengan while 
// echo "<h2>Menampilkan Array dengan while</h2>";
// $i = 0;

// while( $i < count($barang) ) {
//     $a = $i + 1;
//     echo $a.".".$barang[$i]."<br>";
//     $i++;
// }

// echo "<hr>";

// print_r($barang);
// echo "<hr>";
// var_dump($barang);





// $hobi = ["ngoding", "futsal", "Olahraga"];


// $hobi[3]  = "makan";


// $hobi[] = "pukul orang";


// foreach($hobi as $row) {
//     echo "$row<br>";
// }







// $mahasiswa = [
//     [
//         "nama" => "Tri Syabana Octabiar",
//         "umur" => 22,
//     ],
//     [
//         "nama" => "Febyan Nabila Szaqina",
//         "umur" => 21,
//     ],
    

// ];

// echo "<h2>Daftar Mahasiswa</h2>";
// foreach($mahasiswa as $row) {
//     echo "<ul>";
//         echo "<li> Nama:".$row['nama']."</li>";
//         echo "<li> Umur:".$row['umur']."</li>";
//         echo "<hr>";
//     echo "</ul>";
    
    
// }












// function salam($nama) {
//     echo "Perkanalkan nama saya $nama";
// }


// salam("Tri");
// echo "<hr>";
// salam("Febyan");
// echo "<hr>";





// function perkenalan($nama, $salam = "Assalamualaikum") {
//     echo "$salam,";
//     echo " Perkenalkan nama saya $nama";
//     echo " Senang Berkenalan dengan anda ";
// }

// perkenalan("Tri Syabana Octabiar ", "Hi ");

// echo "<hr>";

// $saya = "Febyan ";
// $ucapanSalam = "Selamat Pagi ";

// perkenalan($saya);

// function perkenalan($nama, $salam = "Assalamualaikum") {
//     echo "$salam, ";
//     echo "Perkenalkan Nama saya $nama";
//     echo "usia saya " .hitungUmur(2001,2022)." Tahun";
// }


function hitungUmur($tahunLahir, $tahunSekarang) {
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
}

// perkenalan("Febyan Nabila Szaqina ");

echo "umur saya ". hitungUmur( 1965, 2022 ) . " Tahun";








// function faktorial($angka) {
//     if ($angka < 2) {
//       return 1;
//     } else {
//     // memanggil dirinya sendiri
//     return ($angka * faktorial($angka-1));
//     }
//   }
  
//   // memanggil fungsi
//   echo "faktorial 5 adalah " . faktorial(5);
  