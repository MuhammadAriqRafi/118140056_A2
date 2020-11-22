<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Modul 3 | Muhammad Ariq Rafi</title>
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
    function faktorial($bilangan)
    {
        $sum = 1;
        for ($i = 1; $i <= $bilangan; $i++) {
            $sum *= $i;
        }
        return $sum;
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label style="margin-bottom: .5rem;" for="bilangan">Masukkan bilangan: </label><br>
        <input type="text" name="bilangan">
        <input type="submit" name="submit" value="Cari Faktorial">
    </form>

    <h1>
        <?php
        if (isset($_POST['submit'])) {
            echo "Hasil: " . faktorial($_POST['bilangan']);
        }
        ?>
    </h1>

</body>

</html>