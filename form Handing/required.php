<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM HANDLING</title>
</head>
<body>
   <?php 
   //back to null
   $namaLengkap ="";
   $kelas ="";

    // message error required
    $namaLengkaperror ="";
    $kelaserror ="";
 
   if($_SERVER["REQUEST_METHOD"] === "POST") {
    // $namalengkap = dataType($_POST['namaLengkap']);
    // $kelas = dataType($_POST['kelas']);
    if(empty($_POST['namaLengkap'])){
        $namaLengkaperror = "Nama lengkap Tidak Boleh kosong, Harus diisikan.";
    }else {
        $namaLengkap = dataType($_POST['namaLengkap']);
    }
    if(empty($_POST['namaLengkap'])){
        $kelaserror = "kelas Tidak Boleh kosong, Harus diisikan.";
    }else {
        $kelas = dataType($_POST['kelas']);
    }
   }

   function dataType($datakelas)
   {
    $inputData = trim($datakelas);
    $inputData = stripslashes($datakelas);
    $inputData = htmlspecialchars($datakelas);
    return $inputData;
   }
   ?>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="POST">
   <div style="margin-bottom: 3px;">
        <label for="usermame">Username</label>
        <input type="text" id="username" name="namaLengkap" placeholder="Masukkan Nama Anda" />
        <span style="color:red; font-size:10px"> <?php echo $namaLengkaperror; ?> </span>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="kelas">kelas</label>
        <input type="number" id="kelas" name="kelas" placeholder="masukkan kelas anda" />
        <span style="color:red; font-size:10px;"> <?php echo $kelaserror; ?> </span>
    </div>
    <button type="submit">Simpan</button>
    <!-- <input type="submit" value="Simpan"> -->
    </form>

    <?php
    echo "<br>";
    echo "nama lengkap saya " . $namaLengkap;
    echo "<br>";
    echo "kelas saya" . $kelas;
    ?>
</body>
</html>