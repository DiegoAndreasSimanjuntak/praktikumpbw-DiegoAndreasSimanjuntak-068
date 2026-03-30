<?php
$nama = "";
$nilai = "";
$predikat = "";
$status = "";

if (!empty($_POST["nama"]) && !empty($_POST["nilai"])) {
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];
    
    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75) {
        $predikat = "B";
    } elseif ($nilai >= 65) {
        $predikat = "C";
    } elseif ($nilai >= 50) {
        $predikat = "D";
    } elseif ($nilai >= 0) {
        $predikat = "E";
    } else {
        $predikat = "Tidak Valid";
    }

    if ($nilai >= 65) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }
}
?>

<h2>Hasil Output</h2>
<p>Nama : <?php echo $nama; ?></p>
<p>Nilai : <?php echo $nilai; ?></p>
<p>Predikat : <?php echo $predikat; ?></p>
<p>Status : <?php echo $status; ?></p>