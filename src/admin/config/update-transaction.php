<?php
include 'databases.php';

$dataJumlah = json_decode(file_get_contents("php://input"), true);

$transaksiModel = new Transaksi($koneksi);

$responses = array();

foreach ($dataJumlah as $transaksiID => $jumlahBarang) {
    if ($jumlahBarang === 0) {
        $responses[] = array("success" => false, "message" => "Jumlah barang tidak boleh 0 untuk transaksi dengan ID $transaksiID.");
        continue;
    }

    $totalHarga = $jumlahBarang * $transaksiModel->getHargaPerBarang($transaksiID);

    if ($totalHarga === 0) {
        $responses[] = array("success" => false, "message" => "Total harga tidak boleh 0 untuk transaksi dengan ID $transaksiID.");
        continue;
    }

    $isUpdated = $transaksiModel->updateTransaksiDetail($transaksiID, $jumlahBarang, $totalHarga);

    if ($isUpdated) {
        $responses[] = array("success" => true, "message" => "Data Berhasil Dikirim Silahkan Mengisis Kepuasaan Anda Terlebih Dahulu");
    } else {
        $responses[] = array("success" => false, "message" => "Gagal memperbarui data transaksi dengan ID $transaksiID.");
    }
}

echo json_encode($responses);
