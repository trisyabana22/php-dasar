<?php

session_start();

if (isset($_SESSION["login"])) {
    header('Location: index.php');
    exit;
}

require 'koneksi.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // var_dump($_SERVER["REQUEST_METHOD"]);
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");


    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header('Location:index.php');
            exit;
        }
    }

    $error  = true;
}



?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>
    <h1>Login Form</h1>

    <ul>
        <?php if (isset($error)) : ?>
            <h3 style="color:red;">Username / password salah</h3>
        <?php endif; ?>
        <form action="" method="post">
            <li>
                <label for="username">Ketikan Username</label>
                <input type="text" name="username" id='username'>

            </li>
            <li>
                <label for="password">Ketikan Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </form>
    </ul>


</body>

</html>