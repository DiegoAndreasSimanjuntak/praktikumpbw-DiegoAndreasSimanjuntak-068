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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Pesanan</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <?php include 'nav.php'; ?>
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="rounded-3xl bg-white p-8 shadow-sm border border-slate-200">
            <h2 class="text-2xl font-semibold mb-6 text-slate-900">Daftar Pesanan</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">ID Pesanan</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Nama Pelanggan</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Tanggal Pesanan</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 bg-white">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-3 text-sm text-slate-700"><?= $row['Pesanan_ID'] ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?= htmlspecialchars($row['Nama_Pelanggan']) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?= $row['Tanggal_Pesanan'] ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700">Rp <?= number_format($row['Total_Harga'], 2) ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>