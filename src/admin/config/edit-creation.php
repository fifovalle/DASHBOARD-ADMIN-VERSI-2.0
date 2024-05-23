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

$transaksi = new Transaksi($koneksi);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../../../vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php';
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    $pembayaranID = filter_input(INPUT_POST, 'ID_Pembuatan', FILTER_SANITIZE_STRING);


    if (isset($_FILES['Upload_File'])) {
        $fileTransaksi = $_FILES['Upload_File'];

        $namaFileTransaksi = $fileTransaksi['name'];
        $fileTransaksiTemp = $fileTransaksi['tmp_name'];
        $ukuranFileTransaksi = $fileTransaksi['size'];
        $errorFileTransaksi = $fileTransaksi['error'];

        $tujuanFileTransaksi = '../assets/image/uploads/';
        $ukuranMaksimal = 2 * 1024 * 1024;

        if ($errorFileTransaksi === 0 && !empty($namaFileTransaksi) && $ukuranFileTransaksi <= $ukuranMaksimal) {
            $ekstensi = pathinfo($namaFileTransaksi, PATHINFO_EXTENSION);
            if (in_array($ekstensi, ['pdf', 'docx', 'xlsx', 'txt'])) {
                $namaFileBaru = uniqid() . '.' . $ekstensi;
                $tujuanFileBaru = $tujuanFileTransaksi . $namaFileBaru;

                if (move_uploaded_file($fileTransaksiTemp, $tujuanFileBaru)) {
                    $transaksi->updateTransaksi($pembayaranID, $namaFileBaru);
                    echo json_encode(array("success" => true, "message" => "Transaksi berhasil diperbarui."));
                } else {
                    echo json_encode(array("success" => false, "message" => "Gagal mengunggah file."));
                }
            } else {
                echo json_encode(array("success" => false, "message" => "Unggah file gagal. Pastikan file berformat PDF, DOCX, XLSX, atau TXT."));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Unggah file gagal. Pastikan file berukuran maksimal 2MB dan dalam format yang benar."));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Tidak ada file yang diunggah."));
    }
}
