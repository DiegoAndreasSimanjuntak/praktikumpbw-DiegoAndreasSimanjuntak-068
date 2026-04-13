<h2>Bilangan Genap</h2>

<form method="post">
    <label>Tampilkan sampai angka:</label>
    <input type="number" name="batas">
    <button type="submit">Proses</button>
</form>

<?php
if (isset($_POST['batas'])) {
    $batas = $_POST['batas'];

    echo "Bilangan genap dari 2 sampai $batas:<br>";

    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . "<br>";
    }
}
?>