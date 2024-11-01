<?php
include 'koneksi.php';

function calculateTotalCost($biaya_harian, $lama_sewa, $paket, $extra_hour) {
    $discount_rate = 0;
    if ($paket === 'Paket 1') {
        $discount_rate = 0.10;
    } elseif ($paket === 'Paket 2') {
        $discount_rate = 0.20;
    } elseif ($paket === 'Paket 3') {
        $discount_rate = 0.25;
    }

    $biaya_tambahan = $extra_hour * 100000;
    $total_biaya_rental = ($biaya_harian * $lama_sewa) + $biaya_tambahan;
    $diskon_rupiah = $total_biaya_rental * $discount_rate;
    $total_biaya = $total_biaya_rental - $diskon_rupiah;

    return [$total_biaya_rental, $total_biaya, $diskon_rupiah, $biaya_tambahan];
}

function saveRentalData($nama_penyewa, $nama_mobil, $lama_sewa, $paket, $extra_hour) {
    global $conn;

    $biaya_rental = match ($nama_mobil) {
        'Avanza' => 640000,
        'Innova' => 890000,
        'New Altis' => 1500000,
        'New Camry' => 2190000,
        'Alphard' => 3220000,
        default => 0,
    };

    list($total_biaya_rental, $total_biaya, $diskon_rupiah, $biaya_tambahan) = calculateTotalCost($biaya_rental, $lama_sewa, $paket, $extra_hour);

    $sql = "INSERT INTO t_biaya_rental (nama_penyewa, nama_mobil, lama_sewa, paket, biaya_rental, biaya_tambahan, total_biaya_rental, diskon, total_biaya)
            VALUES (:nama_penyewa, :nama_mobil, :lama_sewa, :paket, :biaya_rental, :biaya_tambahan, :total_biaya_rental, :diskon, :total_biaya)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':nama_penyewa' => $nama_penyewa,
        ':nama_mobil' => $nama_mobil,
        ':lama_sewa' => $lama_sewa,
        ':paket' => $paket,
        ':biaya_rental' => $biaya_rental * $lama_sewa,
        ':biaya_tambahan' => $biaya_tambahan,
        ':total_biaya_rental' => $total_biaya_rental,
        ':diskon' => $diskon_rupiah,
        ':total_biaya' => $total_biaya,
    ]);
}
?>