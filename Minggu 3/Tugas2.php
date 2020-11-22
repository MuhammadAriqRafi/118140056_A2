<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Modul 3 | Muhammad Ariq Rafi</title>
    <style>
        input {
            font-size: 14px;
            padding: 1em;
            margin-bottom: .5rem;
        }
    </style>
</head>

<body>

    <?php
    function hitung($panjang)
    {
        if (strlen($panjang) >= 1 && strlen($panjang) <= 10) {
            $harga = 300;
            $harga *= strlen($panjang);
            return $harga;
        } elseif (strlen($panjang) >= 11 && strlen($panjang) <= 20) {
            $harga = 500;
            $harga *= strlen($panjang);
            return $harga;
        } else {
            $harga = 700;
            $harga *= strlen($panjang);
            return $harga;
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label style="margin-bottom: .5rem;" for="bilangan">Masukkan karakter: </label><br>
        <input type="text" name="nama"><br>
        <input type="text" name="warna"><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <h1 style="color: <?php echo empty($_POST['warna']) ? "red" : $_POST['warna'] ?>; ">
        <?php
        if (isset($_POST['submit'])) {
            echo 'Harga: ' . hitung($_POST['nama']);
        }
        ?>
    </h1>

</body>

</html>