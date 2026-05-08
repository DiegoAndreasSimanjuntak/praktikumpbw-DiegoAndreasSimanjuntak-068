<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Buku</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <?php include 'nav.php'; ?>
    <div class="max-w-3xl mx-auto px-4 py-8">
        <div class="rounded-3xl bg-white p-8 shadow-sm border border-slate-200">
            <h2 class="text-2xl font-semibold mb-6 text-slate-900">Tambah Buku Baru</h2>
            <form method="post" action="proses_tambah_buku.php" class="space-y-5">
            <div>
                <label for="judul" class="block mb-2 text-sm font-medium text-slate-700">Judul</label>
                <input type="text" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="judul" name="judul" required>
            </div>
            <div>
                <label for="penulis" class="block mb-2 text-sm font-medium text-slate-700">Penulis</label>
                <input type="text" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="penulis" name="penulis" required>
            </div>
            <div>
                <label for="tahun_terbit" class="block mb-2 text-sm font-medium text-slate-700">Tahun Terbit</label>
                <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="tahun_terbit" name="tahun_terbit" required>
            </div>
            <div>
                <label for="harga" class="block mb-2 text-sm font-medium text-slate-700">Harga</label>
                <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="harga" name="harga" step="0.01" required>
            </div>
            <div>
                <label for="stok" class="block mb-2 text-sm font-medium text-slate-700">Stok</label>
                <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="stok" name="stok" required>
            </div>
            <button type="submit" class="rounded-2xl bg-slate-900 px-6 py-3 text-white font-semibold hover:bg-slate-800">Tambah Buku</button>
        </form>
    </div>
</body>

</html>