<?php

require 'registrasi-function.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (registrasi($_POST) > 0) {
        echo "data berhasil ditambahkan";
    } else {
        echo "data gagal di tambahkan";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <h1>Registrasi Users</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password</label>
                <input type="text" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="submit">Daftar</button>
            </li>
        </ul>
    </form>

</body>

</html>