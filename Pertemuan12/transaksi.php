<?php
include 'auth.php';
include 'koneksi_db.php';

// Ambil daftar buku dan pelanggan
$buku_result = $conn->query("SELECT ID, Judul FROM Buku");
$pelanggan_result = $conn->query("SELECT ID, Nama FROM Pelanggan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <title>Buat Pesanan</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <h2 class="text-2xl font-bold mb-4">Buat Pesanan Baru</h2>
        <?php if (isset($_GET['message'])): ?>
            <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded mb-4">
                <?= htmlspecialchars($_GET['message']) ?>
            </div>
        <?php endif; ?>

        <form method="post" action="proses_transaksi.php" class="max-w-md">
            <div class="mb-4">
                <label for="pelanggan_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Pelanggan</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="pelanggan_id" id="pelanggan_id" required>
                    <option value="">Pilih Pelanggan</option>
                    <?php while ($row = $pelanggan_result->fetch_assoc()): ?>
                        <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Nama']) ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <h3 class="text-xl font-semibold mt-4 mb-2">Daftar Buku</h3>
            <div class="mb-4">
                <label for="buku_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Buku</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="buku[1][id]" id="buku_id" required>
                    <option value="">Pilih Buku</option>
                    <?php while ($row = $buku_result->fetch_assoc()): ?>
                        <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Judul']) ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="kuantitas" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Buku</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="kuantitas" name="buku[1][kuantitas]" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Buat Pesanan</button>
        </form>
    </div>
</body>

</html>