<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <title>Tambah Buku</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <h2 class="text-2xl font-bold mb-4">Tambah Buku Baru</h2>
        <form method="post" action="proses_tambah_buku.php" class="max-w-md">
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="judul" name="judul" required>
            </div>
            <div class="mb-4">
                <label for="penulis" class="block text-sm font-medium text-gray-700 mb-1">Penulis</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="penulis" name="penulis" required>
            </div>
            <div class="mb-4">
                <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="tahun_terbit" name="tahun_terbit" required>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="harga" name="harga" step="0.01" required>
            </div>
            <div class="mb-4">
                <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="stok" name="stok" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Buku</button>
        </form>
    </div>
</body>

</html>