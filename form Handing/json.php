<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // json encode
    $kelas = array(
        // 'key' => 'value',
        'x' => 'kelas x',
        'xi' => 'kelas xi',
        'xii' => 'kelas xii',
        'xiii' => 'kelas xiii',
        'xiv' => 'kelas xiv',
    );

    // echo json_encode($kelas['x']); untuk menangkap kelas x
    echo json_encode($kelas);

    foreach($kelas as $array) {
         echo $array . "<br>";
    }

    echo "<br>";

    $kelasDecode = '{"x" : 1, "xii" : 2, "xiii" : 3}';
    var_dump(json_decode($kelasDecode));

    $object = json_decode($kelasDecode);
    print $object->{'x'};
    ?>
</body>
</html>