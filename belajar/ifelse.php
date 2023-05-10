<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    $nilai = 75;
    if($nilai >= 75){
        echo "kamu sudah di atas KKM";
    }else{
        echo "kamu di bawah KKM";
    }

    $waktu = 10;
    if ($waktu <= 10) {
        echo "selamat pagi";
    }else{
        echo"selamat siang";
    }

    echo "<br>";

    //elseif
    $nilaiTugas = 88;
    if ($nilaiTugas >= 90) {
        echo "selamat, kamu nilainya bagus! (A)";
    }
    elseif ($nilaiTugas >= 85) {
        echo "selamat, kamu nilainya bagus! (A-)";
    }
    elseif ($nilaiTugas >= 80) {
        echo "selamat, kamu nilainya bagus! (B)";
    }
    elseif ($nilaiTugas >= 70) {
        echo "selamat, kamu nilainya bagus! (c)";
    }

    // switch
    $hari = "senin";
    switch ($hari) {
        case 'senin':
            echo "Hari ini adlah senin";
            break;
         case 'selasa':
            echo "Hari ini adlah selasa";
            break;
        case 'Rabu':
            echo "Hari ini adlah Rabu";
            break;
        case 'kamis':
            echo "Hari ini adlah kamis";
            break;
        case 'jumat':
            echo "Hari ini adlah jumat";
            break;
        default:
            echo "hari ini weekend Libur! Jangan Ganggu!.";
            break;
    }
    ?>

</body>

</html>