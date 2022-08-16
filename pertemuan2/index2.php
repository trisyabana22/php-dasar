<?php

// $nilai = 12;

// echo "Nilai ku $nilai";



// if($nilai >= 85 and $nilai <= 100) {
//     $status = "Lulus dengan Predikat A";
// } else if ($nilai >= 75 and $nilai <= 84) {
//     $status = "Lulus dengan Predikat B";
// } else if ($nilai >= 60 and $nilai <= 74) {
//     $status = "Lulus dengan Predikat C";
// } else if ($nilai >= 50 and $nilai <= 59) {
//     $status = "Jangan Menyerah dengan Predikat D";
// } else if ($nilai >= 0 and $nilai <= 49) {
//     $status = "Sabar... Kamu Mungkin Hebat dibidang lain";
// } else {
//     $status = "Masukan nilai yang benar";
// }

// echo "</br>";
// echo "$status";


// Percabangan if else

// ====================================

// $nilai = 7;

// if ($nilai) {
//     echo "Nilai $nilai dianggap true";
// } else {
//     echo "Nilai $nilai dianggap false";
// }

// ====================================


// Percabangan switch case

// $url = '/';

// switch ($url) {
//   case '/':
//     echo 'Selamat datang di dashboard.';
//     break;
//   case '/about':
//     echo 'Selamat datang di halaman about.';
//     break;
//   case '/contact':
//     echo 'Selamat datang di halaman kontak.';
//     break;
//   default:
//     echo 'Maaf halaman yang anda cari tidak ditemukan.';
// }

// echo '<br>';

// =========================================


// Perulangan for

// for($i = 1; $i <= 12; $i++){
//     for($j = 1; $j <= $i; $j++){
//         echo "* ";
//     }
//     echo "<br>";
// }


// $listMahasiswa = ["Tri","Febyan"];

// for($i = 0; $i < count($listMahasiswa); $i++){
//     echo "Nama : $listMahasiswa[$i] <br>";
// }


# inisialisasi variabel tidak harus dari angka 0
// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 10 === 0) {
//       continue; # skip perulangan jika nilai $i habis dibagi 10
//     }
    
//     echo "Perulangan ke-{$i} <br>";

//     if ($i > 40) {
//       break; # hentikan perulangan jika $i lebih dari 20
//     }
// }


// Perulangan While
// $i = 0;

// # perulangan ini akan dilakukan selama nilai $i kurang dari 20.
// while($i < 20){
//     echo "perulangan ke-{$i} </br>";

//     $i++;
// }




// perulangan while 2
// # kita mulai dari angka 1
// $i = 1;

// # perulangan akan dilakukan selama variabel $i bukan kelipatan 3
// while ($i % 3 !== 0) {
//     echo "Nilai i = {$i} <br>";

//     # ubah nilai $i secara random dari angka 1-100
//     $i = rand(1, 100);
// }



// Perulangan break dan continue
# kita mulai dari angka 1
// $i = 1;

// # perulangan akan dilakukan selama variabel $i bukan kelipatan 3
// while ($i % 3 !== 0) {
//     if ($i % 5 === 0) {
//       # skip ke perulangan selanjutnya jika $i adalah kelipatan 5
//       # jangan lupa di-random dulu agar tidak terjadi perulangan tanpa batas
//       $i = rand(1, 500);
//       continue; 
//     }

//     echo "Nilai i = {$i} <br>";

//     if ($i > 50 && $i < 60) {
//         break; # jika $i bernilai lebih dari 50 dan kurang dari 60 maka stop paksa
//     }

//     # ubah nilai $i secara random dari angka 1-500
//     $i = rand(1, 500);
// }


// Perulangan dengan do while

// while (false) {
//     echo "Perulangan ke-1 dengan while! <br>";
// }

// do {
//     echo "Perulangan ke-1 dengan do while! <br>";
// } while (false);



// Perulangan for each

// $listMahasiswa = ["Tri Syabana", "Febyan Nabila Szaqina"];

// foreach($listMahasiswa as $mahasiswa) {
//     echo "Nama : $mahasiswa </br>";
// }



// $listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Elmo Bachtiar'];

// foreach ($listMahasiswa as $key => $mahasiswa) {
//     $no = $key + 1;
//     echo "[{$no}] Nama : {$mahasiswa} <br>";
// }




// Fungsi / function
// function sapaPengunjung(string $nama, int $jumlahKunjungan){
//     echo "<h1>Hallo $nama Selamat Datang</h1>";
//     echo "<h1>Terimakasih</h1>";

//     if($jumlahKunjungan >= 10) {
//         echo "Selamat anda mendapatkan 1 e-book gratis";
//     }
// }


// sapaPengunjung(1, "sa");






// Fungsi Bagian 2
// $a = ["merah","kuning","hijau"];

// $apakahVariableABernilaiNull = is_null($a); #hasilnya false
// $apakahVariableABerisiArray = is_array($a); #hasilnya true
// $panjangA = count($a);

// $passwordTerenskripsi = md5('#@431)_!!gdhqj8GtFDgVf12751');

// var_dump($apakahVariableABernilaiNull);
// echo "<hr>";
// var_dump($apakahVariableABerisiArray);
// echo "<hr>";
// var_dump($panjangA);
// echo "<hr>";
// var_dump($passwordTerenskripsi);



// function hitungVolumeBalok(float $panjang, float $lebar, float $tinggi) {
//     $luasBalok = $panjang * $lebar * $tinggi;
//     return $luasBalok;

// }
// # hasil kembalian function langsung di-echo
// echo hitungVolumeBalok(2,4,8) . "<br>";

// # hasil kembalian function disimpan dalam variabel
// $volume = hitungVolumeBalok(4,6,9);

// # hasil kembalian function dijadikan parameter untuk function yang lain
// var_dump(hitungVolumeBalok(2,3,4));


// function hitungVolumeBalok(float $p,float $t, float $l):float {
//     return $p * $t * $l;
// }

// echo hitungVolumeBalok(2,4,2);



// $namaLengkap = function ($namaDepan, $namaBelakang){
//     return "{$namaDepan} {$namaBelakang}";
// };

// echo $namaLengkap("Tri", "Syabana Octabiar");



/**
 * Fungsi ini untuk melakukan foreach pada setiap item pada array.
 * Lalu parameter ke-2 adalah fungsi anonim untuk menangani item array
 * tersebut mau diapakan
 */



// function tampilkanArray (array $array, callable $fungsiEchoer) {
//     foreach ($array as $key => $item) {
//       # di sini kita tidak tahu fungsi anonim ini tugasnya seperti apa
//       # karena ia tergantung fungsi yang dilemparkan sebagai parameter
//       $fungsiEchoer($key, $item, count($array));
//     }
//   }
  
//   # kita bikin satu variabel array berisi kumpulan nama mahasiswa
//   $listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Lendis Fabri'];
  
//   # kita panggil fungsi tampilkanArray()
//   # kita passing variabel $listMahasiswa untuk parameter 1, dan 
//   # fungsi anonim yang akan menangani setiap item dari array
//   # sebagai parameter 2
//   tampilkanArray($listMahasiswa, function ($key, $nama) {
//     echo "{$key} - Bung {$nama} <br>";
//   });
  
//   # kita panggil lagi fungsi tampilkanArray dengan
//   # parameter fungsi anonim yang berbeda. 
//   tampilkanArray($listMahasiswa, function ($key, $nama, $panjangArray) {
//     echo "{$nama}";
  
//     if ($key < $panjangArray - 1) {
//       echo " - ";
//     }
//   });
  
//   echo "<br>";


// $faktor = 10;
// $himpunanAsli = [1, 2, 3, 4];
// $himpunanKelipatan10 = array_map(function ($n) use ($faktor) {
//   return $n * $faktor;
// }, $himpunanAsli);

// var_dump($himpunanAsli);
// echo "<br>";
// var_dump($himpunanKelipatan10);



// function tampilkanAngka (int $jumlah, int $indeks = 1) {
    
//     # panggil diri sendiri selama $indeks <= $jumlah
//     if ($indeks < $jumlah) {
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
//     echo "Perulangan ke-{$indeks} <br>";
//   }


//   tampilkanAngka(20);






// function tampilkanAngka (int $jumlah, int $indeks = 1) {
//     echo "<strong style='color: green'>
//       Sebelum memanggil diri sendiri [{$indeks}]
//     </strong><br>";
   
//     # panggil diri sendiri selama $indeks <= $jumlah
//     if ($indeks < $jumlah) {
//       tampilkanAngka($jumlah, $indeks + 1);
//     } else {
//       echo "<strong style='color: red'>
//         Proses terakhir.
//       </strong><br>";
//     }
  
//     echo "<strong style='color: blue'>
//       Sebelum memanggil diri sendiri [{$indeks}]
//     </strong><br>";
//   }


//   tampilkanAngka(5);


// function coba() {
//     $lokal = "Saya hanya bisa diakses dari fungsi dimana saya berada";
//     echo $lokal;
// }

// coba();

// echo $lokal; #akan error undefined variable $lokal



// Scope Global
//  $a = 10; #Scope Global

// function myTest()
// {
//     // Mengacu ke variabel scope global
//     echo global $a;
// }

// myTest();


// global $a;
// $a="abc";

// echo $a;


// $x=10%5;
// $y=10%8;
// $z=5%2;

// echo $x;
// echo "<hr>";
// echo $y;
// echo "<hr>";
// echo $z;



//penggunaan operator modulus/sisa hasil bagi
// $hal=110;
// if ($hal % 2 == 0)
// echo "Halaman genap";
// else
// echo "Halaman ganji";


// $hari = date('D');
// if ($hari == "Mon") {
//     # code...
//     echo "Selamat Berlibur";
// } else 
// echo "Gawe sateh";

