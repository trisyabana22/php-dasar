<?php

require 'koneksi.php';

function registrasi($data)
{

    global $conn;

    $username = mysqli_real_escape_string($conn, htmlspecialchars(strtolower(stripslashes($data["username"]))));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // Validasi kekuatan password
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);



    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");

    if (empty($username)) {
        echo "username harus diisi<br>";
        // return false;
    }

    if (empty($password)) {
        echo "password harus diisi<br>";
        // return false;
    } else {

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            echo 'Pasword setidaknya harus 8 karakter dan harus memiliki huruf besar, huruf kecil, angka, dan spesial karakter. <br>';
            return false;
        }
    }


    // var_dump(mysqli_fetch_assoc($result));
    // die;





    if (empty($password2)) {
        echo "konfirmasi password harus diisi <br>";
        // return false;
    }

    // cek username ada atau tidak
    if (mysqli_fetch_assoc($result)) {
        echo "username sudah terdaftar <br>";
        // return false;
    }



    // cek password sesuai atau tidak
    if ($password !== $password2) {
        echo "konfirmasi password tidak sesuai <br>";
        // return false;
    }

    $required = [
        "username" => empty($username),
        "password" => empty($password),
        "password2" => empty($password2)
    ];

    // var_dump($required);
    // die;


    if (!$required["username"] && !$required["password"] && !$required["password2"] && $password === $password2 && !mysqli_fetch_assoc($result)) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO user VALUES('','$username', '$password')");
        return mysqli_affected_rows($conn);
    }
}
