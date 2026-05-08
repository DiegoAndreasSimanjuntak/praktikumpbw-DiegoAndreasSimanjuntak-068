<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$nama_pengguna = $_SESSION['nama'] ?? '';
?>
<!-- Menu Navigasi -->
<nav class="bg-slate-900 text-slate-100 shadow">
    <div class="max-w-7xl mx-auto px-4 py-3 flex flex-wrap items-center justify-between gap-3">
        <a class="text-xl font-semibold tracking-wide" href="index.php">Toko Buku Online</a>
        <div class="flex flex-wrap items-center gap-2 text-sm">
            <a class="px-3 py-2 rounded-md hover:bg-slate-800" href="index.php">Daftar Buku</a>
            <a class="px-3 py-2 rounded-md hover:bg-slate-800" href="tambah_buku.php">Tambah Buku</a>
            <a class="px-3 py-2 rounded-md hover:bg-slate-800" href="transaksi.php">Buat Pesanan</a>
            <a class="px-3 py-2 rounded-md hover:bg-slate-800" href="lihat_transaksi.php">Lihat Pesanan</a>
            <a class="px-3 py-2 rounded-md bg-slate-700 hover:bg-slate-600" href="logout.php">Logout</a>
            <?php if ($nama_pengguna): ?>
                <span class="px-3 py-2 text-slate-300">Halo, <?= htmlspecialchars($nama_pengguna) ?></span>
            <?php endif; ?>
        </div>
    </div>
</nav>