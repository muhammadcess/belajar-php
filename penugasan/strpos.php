<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
//tugas 1
    <?php
    $strpos = "saat ini saya sudah mencapai PHP()";
    $searchstrpos = "PHP()";
    echo "\n";
    echo strpos($strpos, $searchstrpos); // hasilnya 12
    ?>

//tugas 2
    <?php
    $strpos = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos";
    $searchstrpos = "belajar php string";
    echo "\n";
    echo strpos($strpos, $searchstrpos); // hasilnya 12
    ?>
</body>

</html>