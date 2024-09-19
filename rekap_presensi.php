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

$sql = "SELECT nama_anak, COUNT(*) as jumlah_presensi FROM presensi GROUP BY nama_anak";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi Presensi</title>
    <style>
        /* (CSS sebelumnya) */
    </style>
</head>
<body>
    <div class="container">
        <h1>Rekapitulasi Presensi</h1>
        <table>
            <tr>
                <th>Nama Anak</th>
                <th>Jumlah Presensi</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nama_anak"] . "</td>";
                    echo "<td>" . $row["jumlah_presensi"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No records found</td></tr>";
            }
            ?>
        </table>
        <a href="index.php">Kembali ke Beranda</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
