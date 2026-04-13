<h2>Daftar Hewan</h2>

<form method="post">
    <label>Masukkan nama hewan (pisahkan dengan koma):</label>
    <input type="text" name="hewan">
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['hewan'])) {
    $input = $_POST['hewan'];

    // ubah string jadi array
    $hewan = explode(",", $input);

    echo "Daftar Hewan:<br>";

    foreach ($hewan as $h) {
        echo trim($h) . "<br>";
    }
}
?>