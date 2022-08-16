<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php 
        echo isset($_POST["submit"]) ? "<h1>Hallo ".$_POST["nama"]."</h1>" : 
        '';
    ?>
    
    <form action="" method="post">
        <label for="nama">Masukan Nama :</label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>
</html>