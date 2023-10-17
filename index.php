<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>PHP Dasar</h1>

    <?php

    $Umur = 2000;
    $Nama = "RENDI";

    echo 'Nama = ' . $Nama;

    echo '<br>';

    echo "Umur : $Umur ";

    echo '<hr>';

    $array_nama = ['RENDI', 'RANGGA', 'PUTRA'];

    echo 'Nama 1 : ' . $array_nama[0];
    echo '<br>';
    echo 'Nama 2 : ' . $array_nama[1];
    echo '<br>';
    echo 'Nama 3 : ' . $array_nama[2];
    echo '<hr>';

    $array_identitas = [
        'RENDI' => ['nama' => 'RENDI', 'Umur' => '1567'],
        'RANGGA' => ['NAMA' => 'RANGGA', 'Umur' => '1432']
    ];

    $Umur = 2000;

    echo  $Umur;
    echo '<br>';

    echo $array_identitas['RANGGA']['Umur'];
    echo '<hr>';

    echo 'perulangan foreach dari array <br>';

    foreach ($array_nama as $key => $isi) {

        echo $isi . '<br>';
    }

    echo '<hr>';
    echo 'Cetak dari PHP';


    ?>

</body>

</html>