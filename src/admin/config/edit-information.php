<?php
include 'databases.php';

function containsXSS($input)
{
    $xss_patterns = [
        "/<script\b[^>]*>(.*?)<\/script>/is",
        "/<img\b[^>]*src[\s]*=[\s]*[\"]*javascript:/i",
        "/<iframe\b[^>]*>(.*?)<\/iframe>/is",
        "/<link\b[^>]*href[\s]*=[\s]*[\"]*javascript:/i",
        "/<object\b[^>]*>(.*?)<\/object>/is",
        "/on[a-zA-Z]+\s*=\s*\"[^\"]*\"/i",
        "/on[a-zA-Z]+\s*=\s*\"[^\"]*\"/i",
        "/<script\b[^>]*>[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/i",
        "/<a\b[^>]*href\s*=\s*(?:\"|')(?:javascript:|.*?\"javascript:).*?(?:\"|')/i",
        "/<embed\b[^>]*>(.*?)<\/embed>/is",
        "/<applet\b[^>]*>(.*?)<\/applet>/is",
        "/<!--.*?-->/",
        "/(<script\b[^>]*>(.*?)<\/script>|<img\b[^>]*src[\s]*=[\s]*[\"]*javascript:|<iframe\b[^>]*>(.*?)<\/iframe>|<link\b[^>]*href[\s]*=[\s]*[\"]*javascript:|<object\b[^>]*>(.*?)<\/object>|on[a-zA-Z]+\s*=\s*\"[^\"]*\"|<[^>]*(>|$)(?:<|>)+|<[^>]*script\s*.*?(?:>|$)|<![^>]*-->|eval\s*\((.*?)\)|setTimeout\s*\((.*?)\)|<[^>]*\bstyle\s*=\s*[\"'][^\"']*[;{][^\"']*['\"]|<meta[^>]*http-equiv=[\"']?refresh[\"']?[^>]*url=|<[^>]*src\s*=\s*\"[^>]*\"[^>]*>|expression\s*\((.*?)\))/i"
    ];

    foreach ($xss_patterns as $pattern) {
        if (preg_match($pattern, $input)) {
            return true;
        }
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../../../vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php';
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    $informasiID = filter_input(INPUT_POST, 'ID_Informasi', FILTER_SANITIZE_STRING);
    $namaInformasi = filter_input(INPUT_POST, 'Nama_Informasi', FILTER_SANITIZE_STRING);
    $deskripsiInformasi = filter_input(INPUT_POST, 'Deskripsi_Informasi', FILTER_SANITIZE_STRING);
    $hargaInformasi = filter_input(INPUT_POST, 'Harga_Informasi', FILTER_SANITIZE_STRING);
    $pemilikInformasi = filter_input(INPUT_POST, 'Pemilik_Informasi', FILTER_SANITIZE_STRING);
    $kategoriInformasi = filter_input(INPUT_POST, 'Kategori_Informasi', FILTER_SANITIZE_STRING);
    $statusInformasi = filter_input(INPUT_POST, 'Status_Informasi', FILTER_SANITIZE_STRING);
    $fotoInformasi = $_FILES['Foto_Informasi'] ?? '';

    $informasiModel = new Informasi($koneksi);

    $informasiLama = $informasiModel->getDataInformasiById($informasiID);
    $fotoInformasiLama = $informasiLama['Foto_Informasi'];

    if ($pemilikInformasi === 'Instansi A') {
        $nomorRekeningInformasi = '1111';
    } elseif ($pemilikInformasi === 'Instansi B') {
        $nomorRekeningInformasi = '2222';
    } elseif ($pemilikInformasi === 'Instansi C') {
        $nomorRekeningInformasi = '3333';
    } else {
        $pesanKesalahan .= "Instansi tidak valid. ";
    }

    $nomorRekeningInformasiFormatted = $nomorRekeningInformasi;

    if (empty($fotoInformasi['name'])) {
        $namaFotoBaru = $fotoInformasiLama;
    } else {
        $ekstensi = pathinfo($fotoInformasi['name'], PATHINFO_EXTENSION);
        $namaFotoBaru = uniqid() . '.' . $ekstensi;
        $tujuanFoto = "../assets/image/uploads/" . $namaFotoBaru;

        if (!move_uploaded_file($fotoInformasi['tmp_name'], $tujuanFoto)) {
            echo json_encode(array("success" => false, "message" => "Gagal mengunggah foto baru."));
            exit;
        }

        if (!empty($fotoInformasiLama)) {
            if (file_exists($fotoInformasiLama)) {
                unlink($fotoInformasiLama);
            } else {
                $pathFotoLama = "../assets/image/uploads/" . $fotoInformasiLama;
                if (file_exists($pathFotoLama)) {
                    unlink($pathFotoLama);
                }
            }
        }
    }

    $dataInformasi = array(
        'Foto_Informasi' => $namaFotoBaru,
        'Nama_Informasi' => $namaInformasi,
        'Deskripsi_Informasi' => $deskripsiInformasi,
        'Harga_Informasi' => $hargaInformasi,
        'Pemilik_Informasi' => $pemilikInformasi,
        'No_Rekening_Informasi' => $nomorRekeningInformasiFormatted,
        'Kategori_Informasi' => $kategoriInformasi,
        'Status_Informasi' => $statusInformasi
    );

    $updateDataInformasi = $informasiModel->perbaruiInformasi($informasiID, $dataInformasi);

    if ($updateDataInformasi) {
        echo json_encode(array("success" => true, "message" => "Data informasi berhasil diperbarui."));
        exit;
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memperbarui data informasi."));
        exit;
    }
} else {
    echo json_encode(array("success" => false, "message" => "Metode request tidak valid."));
    exit;
}
