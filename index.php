<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Daycare</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
            background-color: #333;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin: 0;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        nav ul li a:hover {
            background-color: #575757;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di ABC Daycare</h1>
        <nav>
            <ul>
                <li><a href="tambah_presensi.php">Tambah Presensi</a></li>
                <li><a href="lihat_presensi.php">Lihat Presensi</a></li>
                <li><a href="hapus_presensi.php">Hapus Presensi</a></li>
                <li><a href="rekap_presensi.php">Rekapitulasi Presensi</a></li> <!-- Link Rekapitulasi Ditambahkan -->
                
            </ul>
        </nav>
    </div>
</body>
</html>

