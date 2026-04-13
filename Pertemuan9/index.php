<!DOCTYPE html>
<html>
<head>
    <title>Tugas Bab 8 PHP Dinamis</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 20px;
        }

        h1 {
            color: black;
        }

        h2 {
            color: black;
        }

        a {
            text-decoration: none;
            padding: 8px 12px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            margin-right: 5px;
        }

        a:hover {
            background-color: #2980b9;
        }

        input[type="text"],
        input[type="number"] {
            width: 250px;
            padding: 6px;
            margin-top: 10px auto;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        label {
            display: block;       
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        button {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #27ae60;
        }

        ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<h1>Menu Navigasi</h1>

<a href="?halaman=kendaraan">Soal 1</a> |
<a href="?halaman=genap">Soal 2</a> |
<a href="?halaman=hewan">Soal 3</a> |
<a href="?halaman=cek">Soal 4</a>

<hr>

<?php
if (isset($_GET['halaman'])) {
    switch ($_GET['halaman']) {
        case 'kendaraan':
            include "Soal_1.php";
            break;
        case 'genap':
            include "Soal_2.php";
            break;
        case 'hewan':
            include "Soal_3.php";
            break;
        case 'cek':
            include "Soal_4.php";
            break;
        default:
            echo "Halaman tidak ditemukan";
    }
} else {
    echo "Silakan pilih menu.";
}
?>

</body>
</html>