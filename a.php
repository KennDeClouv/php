<?php

function luasPersegi($p, $l)
{
    $luas = $p * $l;
    return $luas;
}

function luasLingkaran($r)
{
    $luas = $r * $r * 3.14;
    return $luas;
}

function prima($angka)
{
    if ($angka < 2) {
        return "$angka bukan prima";
        ;
    }

    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return "$angka bukan prima";

        }
    }
    return "$angka adalah prima";
}

function nilaiArray($angka)
{
    $hasil = 0;
    foreach ($angka as $a) {
        $hasil += $a;
    }
    ;
    return $hasil;
}
;

echo luasPersegi(10, 10);
echo "<br>";
echo luasLingkaran(10);
echo "<br>";
echo prima(27);
echo "<br>";
echo nilaiArray([10, 20, 30, 40, 50, 60]);

// if(isset($_POST["submit"])){
//     $p = $_POST["panjang"];
//     $l = $_POST["lebar"];
//     $luasPersegi = luasPersegi($p,$l);
// }

// echo luasPersegi("4","5");
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>lingkaran</h1>
    <p><?php //if(isset($_POST["submit"])) {} ?></p>
    <form action="" method="post">
        <input type="number" name="panjang" id="">
        <input type="number" name="lebar" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html> -->