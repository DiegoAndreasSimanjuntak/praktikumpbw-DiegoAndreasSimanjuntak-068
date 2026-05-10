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
    <link href="css/output.css" rel="stylesheet">
</head>

<body class="max-w-7xl mx-auto px-4 mt-20">
    <h2 class="text-2xl font-bold mb-4">Masuk kedalam sistem</h2>
    <?php if (isset($_GET['message'])): ?>
        <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded mb-4">
            <?= htmlspecialchars($_GET['message']) ?>
        </div>
    <?php endif; ?>
    <form method="post" action="proses_login.php" class="max-w-sm">
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama pengguna :</label>
            <input type="text" name="username" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Kata sandi :</label>
            <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</button>
    </form>
</body>

</html>