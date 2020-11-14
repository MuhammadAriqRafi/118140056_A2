<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 | Muhammad Ariq Rafi</title>
</head>

<body>
    <?php
    $data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "lorem", "ipsum", "dolor");

    echo "Sebelum diurutkan : <br>";
    $i = 0;
    foreach ($data as $value) {
        echo "$i. $value <br>";
        $i++;
    }

    echo "<br>Setelah diurutkan dari A-Z : <br>";
    sort($data);
    $i = 0;
    foreach ($data as $value) {
        echo "$i. $value <br>";
        $i++;
    }

    echo "<br>Setelah diurutkan dari Z-A : <br>";
    rsort($data);
    $i = 0;
    foreach ($data as $value) {
        echo "$i. $value <br>";
        $i++;
    }
    ?>
</body>

</html>