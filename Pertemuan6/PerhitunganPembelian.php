<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        body{
            font-family: Arial;
        }
        .box{
            width: 530px;
            border: 2px solid black;
            padding: 0px 20px 20px 30px;
        }
        h2{
            text-align: left;
        }
    </style>
</head>
<body>

<div class="box">
<h2>Perhitungan Total Pembelian (Dengan Array)</h2>
<hr>

<?php

// konstanta pajak
define("PAJAK", 0.10);

// array data barang
$barang = [
    "Keyboard" => 150000,
    "Mouse" => 80000,
    "Monitor" => 1200000
];

// pilih barang
$namaBarang = "Keyboard";
$hargaSatuan = $barang[$namaBarang];

// jumlah beli (variabel)
$jumlahBeli = 2;

// perhitungan
$totalSebelumPajak = $hargaSatuan * $jumlahBeli;
$pajak = $totalSebelumPajak * PAJAK;
$totalBayar = $totalSebelumPajak + $pajak;

// output
echo "Nama Barang: " . $namaBarang . "<br>";
echo "Harga Satuan: Rp " . number_format($hargaSatuan,0,",",".") . "<br>";
echo "Jumlah Beli: " . $jumlahBeli . "<br>";
echo "Total Harga (Sebelum Pajak): Rp " . number_format($totalSebelumPajak,0,",",".") . "<br>";
echo "Pajak (10%): Rp " . number_format($pajak,0,",",".") . "<br>";
echo "<b>Total Bayar: Rp " . number_format($totalBayar,0,",",".") . "</b>";

?>

</div>

</body>
</html>