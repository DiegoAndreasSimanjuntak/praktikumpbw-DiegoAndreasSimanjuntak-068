<?php
include 'auth.php';
include 'proses_index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <title>Daftar Buku</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>

        <!-- Form Pencarian -->
        <form method="get" class="flex flex-wrap gap-4 mb-4">
            <div class="w-full md:w-1/2 lg:w-2/5">
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Cari Berdasarkan Judul</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="judul" name="judul" placeholder="Masukkan judul buku"
                    value="<?php echo htmlspecialchars($search_judul) ?>">
            </div>
            <div class="w-full md:w-1/3">
                <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Cari Berdasarkan Tahun Terbit</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="tahun_terbit" name="tahun_terbit"
                    placeholder="Masukkan tahun terbit" value="<?php echo htmlspecialchars($search_tahun) ?>">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cari</button>
            </div>
            <div class="flex items-end">
                <a href="index.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Reset</a>
            </div>
        </form>

        <!-- Tabel Daftar Buku -->
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Judul</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Penulis</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Tahun Terbit</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?php echo $row['ID'] ?></td>
                        <td class="px-4 py-2"><?php echo htmlspecialchars($row['Judul']) ?></td>
                        <td class="px-4 py-2"><?php echo htmlspecialchars($row['Penulis']) ?></td>
                        <td class="px-4 py-2"><?php echo $row['Tahun_Terbit'] ?></td>
                        <td class="px-4 py-2">Rp<?php echo number_format($row['Harga'], 2) ?></td>
                        <td class="px-4 py-2">
                            <a href="form_edit.php?id=<?php echo $row['ID'] ?>" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 mr-2">Edit</a>
                            <a href="proses_hapus.php?id=<?php echo $row['ID'] ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>