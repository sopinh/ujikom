<?php
include 'fungsi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    saveRentalData($_POST['nama_penyewa'], $_POST['nama_mobil'], $_POST['lama_sewa'], $_POST['paket'], $_POST['extra_hour']);
}

$sql = "SELECT * FROM t_biaya_rental";
$stmt = $conn->query($sql);
$rentals = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Penyewa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #4b9cd3;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4b9cd3;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
        }

        button {
            background-color: #4b9cd3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            margin-left: 10px; 
            margin-right: 10px; 
        }

        button:hover {
            background-color: #357a9c;
        }

        .home-button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none; 
            transition: background-color 0.3s ease;
            margin-top: 20px; 
            margin-left: 10px; 
            margin-right: 10px; 
            display: inline-block; 

        .home-button:hover {
            background-color: #218838; 
        }
    </style>
    <script>
        function printArea() {
            window.print();
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Data Penyewa Mobil</h2>
        <div id="print-area">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Penyewa</th>
                    <th>Nama Mobil</th>
                    <th>Lama Sewa (hari)</th>
                    <th>Paket</th>
                    <th>Biaya Rental</th>
                    <th>Biaya Tambahan</th>
                    <th>Total Biaya Rental</th>
                    <th>Diskon (Rp)</th>
                    <th>Total Biaya</th>
                </tr>
                <?php $no = 1; foreach ($rentals as $rental): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($rental['nama_penyewa']) ?></td>
                        <td><?= htmlspecialchars($rental['nama_mobil']) ?></td>
                        <td><?= htmlspecialchars($rental['lama_sewa']) ?></td>
                        <td><?= htmlspecialchars($rental['paket']) ?></td>
                        <td>Rp <?= number_format($rental['biaya_rental'], 0, ',', '.') ?></td>
                        <td>Rp <?= number_format($rental['biaya_tambahan'], 0, ',', '.') ?></td>
                        <td>Rp <?= number_format($rental['total_biaya_rental'], 0, ',', '.') ?></td>
                        <td>Rp <?= number_format($rental['diskon'], 0, ',', '.') ?></td>
                        <td>Rp <?= number_format($rental['total_biaya'], 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div><br>

        <button onclick="printArea()">Cetak Data Penyewa</button>
        <a href="index.php" class="home-button">Kembali ke Home</a> 
    </div>
</body>
</html>
