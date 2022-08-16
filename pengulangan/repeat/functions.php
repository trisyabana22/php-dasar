<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "buku";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Validasi
// define variables and set to empty values
$judul_buku_err =  "";
$penerbit_err =  "";
$tahun_terbit_err =  "";
$gambar_err =  "";

// $name = $email = $gender = $comment = $website = "";

function query($query)
{
    global $conn;
    $db = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($db)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{
    global $conn;
    global $judul_buku_err;
    global $penerbit_err;
    global $tahun_terbit_err;
    global $gambar_err;

    $judul_buku = trim(stripslashes(htmlspecialchars($data["judul_buku"])));
    $penerbit = trim(stripslashes(htmlspecialchars($data["penerbit"])));
    $tahun_terbit = trim(stripslashes(htmlspecialchars($data["tahun_terbit"])));
    $gambar = trim(stripslashes(htmlspecialchars($data["gambar"])));

    if (empty($judul_buku)) {
        $judul_buku_err = "Judul Buku Tidak Boleh Kosong";
    }

    if (!preg_match("/^[a-zA-Z ]*$/", $judul_buku)) {
        $judul_buku_err = "Only letters and white space allowed";
    }


    if (empty($penerbit)) {
        $penerbit_err = "Penerbit Buku Tidak Boleh Kosong";
    }


    if (empty($tahun_terbit)) {
        $tahun_terbit_err = "Tahun Terbit Buku Tidak Boleh Kosong";
    }

    if (empty($gambar)) {
        $gambar_err = "Gambar Buku Tidak Boleh Kosong";
    }

    if (!empty($judul_buku) && !empty($penerbit) && !empty($tahun_terbit) && !empty($gambar) && preg_match("/^[a-zA-Z ]*$/", $judul_buku)) {

        // query insert data
        $query = "INSERT INTO buku VALUES 
                                ('', '$judul_buku', '$penerbit', '$tahun_terbit', '$gambar')";

        mysqli_query($conn, $query);
    }


    return mysqli_affected_rows($conn);
}
