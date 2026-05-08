<?php
include 'auth.php';
include 'proses_index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Buku</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-3xl font-semibold mb-6 text-slate-900">Daftar Buku</h2>

        <!-- Form Pencarian -->
        <form method="get" class="grid gap-4 lg:grid-cols-5 mb-6">
            <div class="lg:col-span-2">
                <label for="judul" class="block mb-2 text-sm font-medium text-slate-700">Cari Berdasarkan Judul</label>
                <input type="text" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="judul" name="judul" placeholder="Masukkan judul buku" value="<?php echo htmlspecialchars($search_judul) ?>">
            </div>
            <div class="lg:col-span-2">
                <label for="tahun_terbit" class="block mb-2 text-sm font-medium text-slate-700">Cari Berdasarkan Tahun Terbit</label>
                <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?php echo htmlspecialchars($search_tahun) ?>">
            </div>
            <div class="flex items-end gap-3">
                <button type="submit" class="inline-flex h-12 items-center justify-center rounded-2xl bg-slate-900 px-5 text-white font-semibold hover:bg-slate-800">Cari</button>
                <a href="index.php" class="inline-flex h-12 items-center justify-center rounded-2xl border border-slate-300 bg-white px-5 text-slate-900 hover:bg-slate-100">Reset</a>
            </div>
        </form>

        <!-- Tabel Daftar Buku -->
        <div class="overflow-x-auto rounded-3xl bg-white shadow-sm border border-slate-200">
            <table class="min-w-full divide-y divide-slate-200">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">ID</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Judul</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Penulis</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Tahun Terbit</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Harga</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 bg-white">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-3 text-sm text-slate-700"><?php echo $row['ID'] ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?php echo htmlspecialchars($row['Judul']) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?php echo htmlspecialchars($row['Penulis']) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?php echo $row['Tahun_Terbit'] ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700">Rp<?php echo number_format($row['Harga'], 2) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700 space-x-2">
                                    <a href="form_edit.php?id=<?php echo $row['ID'] ?>" class="inline-flex rounded-2xl bg-amber-500 px-3 py-2 text-sm font-semibold text-slate-900 hover:bg-amber-400">Edit</a>
                                    <a href="proses_hapus.php?id=<?php echo $row['ID'] ?>" class="inline-flex rounded-2xl bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
</body>

</html>