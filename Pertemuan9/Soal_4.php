<h2>Cek Genap atau Ganjil</h2>

<form method="post">
    <label>Masukkan angka:</label>
    <input type="number" name="angka">
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];

    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

    echo "Angka $angka adalah $hasil";
}
?>