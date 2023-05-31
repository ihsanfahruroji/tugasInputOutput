<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Output</title>
</head>
<body>
    <h1>Masukkan Data Anda</h1>
    <form action="#" method="post">
        <div>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" >
        </div>
        <div>
            <label for="tempat_tinggal">Tempat Tinggal:</label>
            <input type="text" name="tempat_tinggal" id="tempat_tinggal" >
        </div>
        <div>
            <label for="usia">Usia:</label>
            <input type="number" name="usia" id="usia" >
        </div>
        <input type="submit" value="Simpan" name="simpanan">
    </form>
</body>
</html>
<?php
class Input {
    public $nama;
    public $tempat_tinggal;
    public $usia;
}

if(isset($_POST['simpanan'])){
    $nama = $_POST['nama'];
    $tempat_tinggal = $_POST['tempat_tinggal'];
    $usia = $_POST['usia'];
     
    if(empty($nama) || empty($tempat_tinggal) || empty($usia)){
        echo "Data masih kosong!";
    } else {
        $data = new Input();
        $data->nama = $nama;
        $data->tempat_tinggal = $tempat_tinggal;
        $data->usia = $usia;
        
        if (!ctype_alpha($data->nama)) {
            echo "Hanya dapat memasukkan huruf untuk Nama.<br>";
        } else {
            echo "Nama: " . $data->nama . "<br>";
        }
        
        if (!ctype_alpha($data->tempat_tinggal)) {
            echo "Hanya dapat memasukkan huruf untuk Tempat Tinggal.<br>";
        } else {
            echo "Tempat Tinggal: " . $data->tempat_tinggal . "<br>";
        }
        
        echo "Usia: " . $data->usia . "<br>";
    }
}
?>



