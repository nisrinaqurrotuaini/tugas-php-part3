<?php
// Meminta input usia dari pengguna
echo "Masukkan usia Anda: ";
$usia = trim(fgets(STDIN));

// Menentukan kategori usia
if ($usia >= 0 && $usia <= 12) {
    echo "Kategori: Anak-anak";
} elseif ($usia >= 13 && $usia <= 17) {
    echo "Kategori: Remaja";
} elseif ($usia >= 18 && $usia <= 59) {
    echo "Kategori: Dewasa";
} elseif ($usia >= 60) {
    echo "Kategori: Lansia";
} else {
    echo "Usia tidak valid";
}
