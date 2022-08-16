<?php
// array
// variabel yang dapat menampung banyak nilai
// Element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array 
// Cara Lama
$hari = array("Senin","Selasa");

// Cara Baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123,"tulisan", false];


// Menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";


// Menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[0];


// Menambahkan element baru pada array
var_dump($hari);
$hari[] = "Rabu";
echo "<br>";
var_dump($hari);

?> 