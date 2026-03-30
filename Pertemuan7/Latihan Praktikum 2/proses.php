<?php
if (!empty($_POST['npm']) && !empty($_POST['nama'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    $diskon = 0;

    // Logika diskon
    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon = 15;
        }
    }

    // Perhitungan
    $potongan = ($diskon / 100) * $ukt;
    $bayar = $ukt - $potongan;

    // Output
    echo "NPM : $npm <br>";
    echo "NAMA : $nama <br>";
    echo "PRODI : $prodi <br>";
    echo "SEMESTER : $semester <br>";
    echo "BIAYA UKT : Rp. " . number_format($ukt,0,',','.') . ",-<br>";
    echo "DISKON : $diskon% <br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($bayar,0,',','.') . ",-<br>";
} else {
    echo "Data belum dikirim!";
}
?>

</body>
</html>