<h2>Menentukan Jenis Kendaraan</h2>

<form method="post">
    <label>Masukkan jumlah roda:</label>
    <input type="number" name="roda">
    <button type="submit">Proses</button>
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];

    switch ($roda) {
        case 2:
            echo "Kendaraan: Motor";
            break;
        case 3:
            echo "Kendaraan: Bajaj";
            break;
        case 4:
            echo "Kendaraan: Mobil";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui";
    }
}
?>