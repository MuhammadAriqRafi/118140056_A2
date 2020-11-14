<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 | Muhammad Ariq Rafi</title>
</head>

<body>
    <?php
    $input1 = 20;
    $input2 = 5;

    echo "PENJUMLAHAN <br>";
    echo "Operator : + <br>";
    $operator = $input1 + $input2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PENGURANGAN <br>";
    echo "Operator : - <br>";
    $operator = $input1 - $input2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PERKALIAN <br>";
    echo "Operator : * <br>";
    $operator = $input1 * $input2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>PEMBAGIAN <br>";
    echo "Operator : / <br>";
    $operator = $input1 / $input2;
    echo "Hasil : " . $operator . "<br>";

    echo "<br>MODULUS <br>";
    echo "Operator : % <br>";
    $operator = $input1 % $input2;
    echo "Hasil : " . $operator . "<br>";
    ?>
</body>

</html>