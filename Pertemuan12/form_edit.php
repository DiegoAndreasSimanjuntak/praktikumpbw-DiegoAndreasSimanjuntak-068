<?php
include 'auth.php';
include 'koneksi_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <title>Edit Buku</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <?php
        $id = $_GET['id'] ?? 0;
        $stmt = $conn->prepare("SELECT * FROM Buku WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        ?>

        <h2 class="text-2xl font-bold mb-4">Edit Data Buku</h2>
        <form method="post" action="proses_edit.php" class="max-w-md">
            <input type="hidden" name="id" value="<?= $row['ID'] ?>">
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="judul" name="judul" value="<?= htmlspecialchars($row['Judul']) ?>" required>
            </div>
            <div class="mb-4">
                <label for="penulis" class="block text-sm font-medium text-gray-700 mb-1">Penulis</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="penulis" name="penulis" value="<?= htmlspecialchars($row['Penulis']) ?>" required>
            </div>
            <div class="mb-4">
                <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="tahun_terbit" name="tahun_terbit" value="<?= $row['Tahun_Terbit'] ?>" required>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="harga" name="harga" value="<?= $row['Harga'] ?>" step="0.01" required>
            </div>
            <div class="mb-4">
                <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="stok" name="stok" value="<?= $row['stok'] ?>" required>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan Perubahan</button>
        </form>
    </div>
</body>

</html>