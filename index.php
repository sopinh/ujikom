<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rental Mobil</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header-container {
            text-align: center;
            padding: 40px 20px;
            background-color: #4b9cd3;
            color: white;
            width: 100%;
        }

        h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .intro-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            text-align: center;
        }

        h3 {
            margin-top: 10px;
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .button-container {
            margin: 20px 0;
        }

        .btn {
            background-color: #4b9cd3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-secondary {
            background-color: #f39c12;
        }

        .btn:hover {
            background-color: #357a9c;
        }

        .btn-secondary:hover {
            background-color: #e67e22;
        }

        table {
            width: 80%; 
            border-collapse: collapse;
            margin: 20px auto; 
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #4b9cd3;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1>Selamat Datang di Sistem Rental Mobil</h1>
    </div>
    
    <div class="intro-container">
        <p>Kami adalah perusahaan Rental Mobil. Dimana Anda dapat menyewa kendaraan dengan cepat dan mudah. Kami menawarkan harga dan diskon yang menarik!</p>
        <h3>Untuk Pemesanan Klik Pesan Sekarang!</h3>

        <div class="button-container">
            <a href="form.php" class="btn">Pesan Sekarang</a>
            <a href="list.php" class="btn btn-secondary">Lihat & Cetak Data Penyewa</a>
        </div>
    </div>

    <div class="container">
        <h2> Daftar Mobil dan Harga</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Biaya Rental/hari</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Avanza</td>
                <td>Rp 640.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Innova</td>
                <td>Rp 890.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>New Altis</td>
                <td>Rp 1.500.000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>New Camry</td>
                <td>Rp 2.190.000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alphard</td>
                <td>Rp 3.220.000</td>
            </tr>
        </table>

        <h2>Biaya Extra/Hour</h2>
        <table>
            <tr>
                <th>Biaya</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>Biaya Extra/Hour</td>
                <td>Rp 100.000</td>
            </tr>
        </table>

        <h2>Paket Diskon yang Menarik</h2>
        <table>
            <tr>
                <th>Program</th>
                <th>Lama Sewa</th>
                <th>Diskon</th>
            </tr>
            <tr>
                <td>Paket 1</td>
                <td>4 Hari</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>Paket 2</td>
                <td>7 Hari</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>Paket 3</td>
                <td>10 Hari</td>
                <td>25%</td>
            </tr>
            <tr>
                <td>Non Paket/Harian</td>
                <td>Menyesuaikan</td>
                <td>-</td>
            </tr>
        </table>
    </div>
</body>
</html>
