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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buat Pesanan</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <?php include 'nav.php'; ?>
    <div class="max-w-4xl mx-auto px-4 py-8">
        <div class="rounded-3xl bg-white p-8 shadow-sm border border-slate-200">
        <h2 class="text-2xl font-semibold mb-4 text-slate-900">Buat Pesanan Baru</h2>
        <?php if (isset($_GET['message'])): ?>
            <div class="mb-6 rounded-lg bg-sky-100 border border-sky-200 p-4 text-slate-800">
                <?= htmlspecialchars($_GET['message']) ?>
            </div>
        <?php endif; ?>

        <form method="post" action="proses_transaksi.php" class="space-y-6">
            <div>
                <label for="pelanggan_id" class="block mb-2 text-sm font-medium text-slate-700">Pilih Pelanggan</label>
                <select class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" name="pelanggan_id" id="pelanggan_id" required>
                    <option value="">Pilih Pelanggan</option>
                    <?php while ($row = $pelanggan_result->fetch_assoc()): ?>
                        <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Nama']) ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-3 text-slate-900">Daftar Buku</h3>
                <div class="space-y-5">
                    <div>
                        <label for="buku_id" class="block mb-2 text-sm font-medium text-slate-700">Pilih Buku</label>
                        <select class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" name="buku[1][id]" id="buku_id" required>
                            <option value="">Pilih Buku</option>
                            <?php while ($row = $buku_result->fetch_assoc()): ?>
                                <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Judul']) ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div>
                        <label for="kuantitas" class="block mb-2 text-sm font-medium text-slate-700">Jumlah Buku</label>
                        <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="kuantitas" name="buku[1][kuantitas]" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="rounded-2xl bg-slate-900 px-6 py-3 text-white font-semibold hover:bg-slate-800">Buat Pesanan</button>
        </form>
    </div>
</body>

</html>