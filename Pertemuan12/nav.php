<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$nama_pengguna = $_SESSION['nama'] ?? '';
?>
<!-- Menu Navigasi -->
<nav class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a class="text-xl font-bold" href="index.php">Toko Buku Online</a>
            <button class="md:hidden text-white focus:outline-none" onclick="toggleMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <div class="hidden md:flex space-x-4 items-center">
                <a class="hover:text-gray-300" href="index.php">Daftar Buku</a>
                <a class="hover:text-gray-300" href="tambah_buku.php">Tambah Buku</a>
                <a class="hover:text-gray-300" href="transaksi.php">Buat Pesanan</a>
                <a class="hover:text-gray-300" href="lihat_transaksi.php">Lihat Pesanan</a>
                <a class="hover:text-gray-300" href="logout.php">Logout</a>
                <?php if ($nama_pengguna): ?>
                    <span class="ml-4">Halo, <?= htmlspecialchars($nama_pengguna) ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden">
            <a class="block py-2 hover:text-gray-300" href="index.php">Daftar Buku</a>
            <a class="block py-2 hover:text-gray-300" href="tambah_buku.php">Tambah Buku</a>
            <a class="block py-2 hover:text-gray-300" href="transaksi.php">Buat Pesanan</a>
            <a class="block py-2 hover:text-gray-300" href="lihat_transaksi.php">Lihat Pesanan</a>
            <a class="block py-2 hover:text-gray-300" href="logout.php">Logout</a>
            <?php if ($nama_pengguna): ?>
                <span class="block py-2">Halo, <?= htmlspecialchars($nama_pengguna) ?></span>
            <?php endif; ?>
        </div>
    </div>
</nav>
<script>
function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}
</script>