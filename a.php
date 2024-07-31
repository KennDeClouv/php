<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://kenndeclouv.github.io/ave/dist/css/ave.css">
</head>

<body>
    <p class="text-center">
        <?php
        // for ($i = 1; $i <= 100; $i++) {
        //     for ($j = 1; $j <= $i; $j++) {
        //         echo "A";
        //     }
        //     echo "<br>";
        // }
        
        // for ($i = 0; $i < 10; $i++) {
        //     $angka[] = $i;
        // }
        $angka = [
            [
                "id" => "1",
                "nama" => "Kenn",
                "user" => "kenn_",
            ],
            [
                "id" => "2",
                "nama" => "Kenn",
                "user" => "kenn_",
            ],
        ];
        // $angka = [1,2,3,4,5,6,7,8,9,10];
        print ($angka[0][1]);

        // foreach ($angka as $a) {
        //     if ($a % 2 == "0") {
        //         echo "$a adalah genap<br>";
        //     } else {
        //         echo "$a adalah ganjil<br>";
        //     }
        // }
        ?>

    </p>
</body>

</html>