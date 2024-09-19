<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc_daycare";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil nama anak dari database untuk dropdown
$nama_anak_options = [];
$sql = "SELECT nama_anak FROM presensi"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $nama_anak_options[] = $row['nama_anak'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_anak = $_POST['nama_anak'];
    $suhu_badan = $_POST['suhu_badan'];
    $jam_kedatangan = $_POST['jam_kedatangan'];

    $sql = "INSERT INTO presensi (nama_anak, suhu_badan, jam_kedatangan) VALUES ('$nama_anak', '$suhu_badan', '$jam_kedatangan')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>New record created successfully</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Presensi</title>
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
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
            border-radius: 8px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            color: #333;
        }
        select, input[type="number"], input[type="time"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Presensi</h1>
        <form method="post" action="">
            <label for="nama_anak">Nama Anak:</label>
            <select id="nama_anak" name="nama_anak" required>
                <option value="">Pilih Nama Anak</option>
                <?php foreach ($nama_anak_options as $nama_anak): ?>
                    <option value="<?php echo htmlspecialchars($nama_anak); ?>"><?php echo htmlspecialchars($nama_anak); ?></option>
                <?php endforeach; ?>
            </select>
            <label for="suhu_badan">Suhu Badan:</label>
            <input type="number" step="0.0" id="suhu_badan" name="suhu_badan" required>
            <label for="jam_kedatangan">Jam Kedatangan:</label>
            <input type="time" id="jam_kedatangan" name="jam_kedatangan" required>
            <input type="submit" value="Simpan">
        </form>
        <a href="index.php">Kembali ke Beranda</a>
    </div>
</body>
</html>


