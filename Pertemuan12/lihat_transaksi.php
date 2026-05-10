<?php
include 'auth.php';
include 'koneksi_db.php'; // Koneksi database

// Query untuk menampilkan data pesanan beserta nama pelanggan dan total harga
$query = "SELECT Pesanan.ID AS Pesanan_ID, Pelanggan.Nama AS Nama_Pelanggan, Pesanan.Tanggal_Pesanan, Pesanan.Total_Harga FROM Pesanan JOIN Pelanggan ON Pesanan.Pelanggan_ID = Pelanggan.ID";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <title>Daftar Pesanan</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <h2 class="text-2xl font-bold mb-4">Daftar Pesanan</h2>

        <!-- Tabel Daftar Pesanan -->
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">ID Pesanan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nama Pelanggan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Tanggal Pesanan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?= $row['Pesanan_ID'] ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($row['Nama_Pelanggan']) ?></td>
                        <td class="px-4 py-2"><?= $row['Tanggal_Pesanan'] ?></td>
                        <td class="px-4 py-2">Rp <?= number_format($row['Total_Harga'], 2) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>