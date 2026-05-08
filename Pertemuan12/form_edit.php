<?php
include 'auth.php';
include 'koneksi_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Buku</title>
</head>

<body class="bg-slate-50 min-h-screen">
    <?php include 'nav.php'; ?>
    <div class="max-w-3xl mx-auto px-4 py-8">
        <?php
        $id = $_GET['id'] ?? 0;
        $stmt = $conn->prepare("SELECT * FROM Buku WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        ?>

        <div class="rounded-3xl bg-white p-8 shadow-sm border border-slate-200">
        <h2 class="text-2xl font-semibold mb-6 text-slate-900">Edit Data Buku</h2>
        <form method="post" action="proses_edit.php" class="space-y-5">
            <input type="hidden" name="id" value="<?= $row['ID'] ?>">
            <div>
                <label for="judul" class="block mb-2 text-sm font-medium text-slate-700">Judul</label>
                <input type="text" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="judul" name="judul" value="<?= htmlspecialchars($row['Judul']) ?>" required>
            </div>
            <div>
                <label for="penulis" class="block mb-2 text-sm font-medium text-slate-700">Penulis</label>
                <input type="text" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="penulis" name="penulis" value="<?= htmlspecialchars($row['Penulis']) ?>" required>
            </div>
            <div>
                <label for="tahun_terbit" class="block mb-2 text-sm font-medium text-slate-700">Tahun Terbit</label>
                <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="tahun_terbit" name="tahun_terbit" value="<?= $row['Tahun_Terbit'] ?>" required>
            </div>
            <div>
                <label for="harga" class="block mb-2 text-sm font-medium text-slate-700">Harga</label>
                <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="harga" name="harga" value="<?= $row['Harga'] ?>" step="0.01" required>
            </div>
            <div>
                <label for="stok" class="block mb-2 text-sm font-medium text-slate-700">Stok</label>
                <input type="number" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" id="stok" name="stok" value="<?= $row['stok'] ?>" required>
            </div>
            <button type="submit" class="rounded-2xl bg-slate-900 px-5 py-3 text-white font-semibold hover:bg-slate-800">Simpan Perubahan</button>
        </form>
    </div>
    </div>
</body>

</html>