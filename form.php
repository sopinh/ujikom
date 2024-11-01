<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Sewa Kendaraan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #4b9cd3;
            font-weight: bold;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #4b9cd3;
            background-color: #e8f4fa;
        }

        button {
            background-color: #4b9cd3;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #357a9c;
        }

        #diskonInfo {
            color: #28a745;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 15px;
        }
    </style>
    <script>
        function toggleDiscountField() {
            const lamaSewa = document.getElementById("lamaSewa").value;
            const paket = document.getElementById("paket");
            const diskonInfo = document.getElementById("diskonInfo");

            // Mengatur paket secara otomatis berdasarkan lama sewa
            if (lamaSewa == 4) {
                paket.value = "Paket 1";
                diskonInfo.textContent = "Anda mendapatkan diskon 10% untuk sewa 4 hari.";
            } else if (lamaSewa == 7) {
                paket.value = "Paket 2";
                diskonInfo.textContent = "Anda mendapatkan diskon 20% untuk sewa 7 hari.";
            } else if (lamaSewa == 10) {
                paket.value = "Paket 3";
                diskonInfo.textContent = "Anda mendapatkan diskon 25% untuk sewa 10 hari.";
            } else {
                paket.value = "Non Paket";
                diskonInfo.textContent = "";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Form Sewa Kendaraan</h2>
        <form method="post" action="list.php">
            <label>Nama Penyewa:</label>
            <input type="text" name="nama_penyewa" required>

            <label>Nama Mobil:</label>
            <select name="nama_mobil">
                <option value="Avanza">Avanza</option>
                <option value="Innova">Innova</option>
                <option value="New Altis">New Altis</option>
                <option value="New Camry">New Camry</option>
                <option value="Alphard">Alphard</option>
            </select>

            <label>Lama Sewa (hari):</label>
            <input type="number" name="lama_sewa" id="lamaSewa" oninput="toggleDiscountField()" required>

            <label>Paket:</label>
            <select name="paket" id="paket">
                <option value="Paket 1">Paket 1 Sewa 4 Hari (Diskon 10%)</option>
                <option value="Paket 2">Paket 2 Sewa 7 Hari (Diskon 20%)</option>
                <option value="Paket 3">Paket 3 Sewa 10 Hari (Diskon 25%)</option>
                <option value="Non Paket">Non Paket</option>
            </select>

            <p id="diskonInfo"></p>

            <label>Extra Jam:</label>
            <input type="number" name="extra_hour" required>

            <button type="submit">Hitung dan Simpan</button>
        </form>
    </div>
</body>
</html>
