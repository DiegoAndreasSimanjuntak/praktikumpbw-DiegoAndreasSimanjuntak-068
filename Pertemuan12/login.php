<?php
session_start();
if (isset($_SESSION['login_Un51k4']) && $_SESSION['login_Un51k4'] === true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-50 flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-md bg-white rounded-3xl border border-slate-200 shadow-lg p-8">
        <h2 class="text-2xl font-semibold mb-6 text-slate-900">Masuk ke dalam sistem</h2>
        <?php if (isset($_GET['message'])): ?>
            <div class="mb-4 rounded-lg bg-sky-100 border border-sky-200 p-4 text-slate-800">
                <?= htmlspecialchars($_GET['message']) ?>
            </div>
        <?php endif; ?>
        <form method="post" action="proses_login.php" class="space-y-5">
            <div>
                <label class="block mb-2 text-sm font-medium text-slate-700">Nama pengguna :</label>
                <input type="text" name="username" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-slate-700">Kata sandi :</label>
                <input type="password" name="password" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none focus:border-slate-400 focus:ring-2 focus:ring-slate-200" required>
            </div>

            <button type="submit" class="w-full rounded-2xl bg-slate-900 px-4 py-3 text-white font-semibold hover:bg-slate-800">Login</button>
        </form>
</body>

</html>