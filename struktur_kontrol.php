<?php
$nilaiNumerik = 92;

if ($nilaiNumerik > 90 && $nilaiNumerik <= 100) {
    $nilaiHuruf = "A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    $nilaiHuruf = "B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    $nilaiHuruf = "C";
} elseif ($nilaiNumerik < 70) {
    $nilaiHuruf = "D";
}

echo "Nilai numerik: $nilaiNumerik<br>";
echo "Nilai huruf: $nilaiHuruf<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTamanan = 10;
$jumlahbuah = 0;

for ($i=1; $i <= $jumlahbuah; $i++) { 
    $jumlahbuah += ($tanamanPerLahan * $buahPerTamanan);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahbuah <br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian andalah: $totalSkor <br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$nilaiSiswa = array_slice($nilaiSiswa, 2, 6);
$totalNilai = array_sum($nilaiSiswa);

echo "Total nilai yang akan digunakan untuk menentukan nilai rata-rata adalah: $totalNilai <br><br>";

$hargaAwal = 120000;
$diskon = 0.2;
$hargaSetelahDiskon = $hargaAwal - ($hargaAwal * $diskon);

echo "Harga yang harus dibayar setelah mendapatkan diskon adalah: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br><br>";

$poin = 600; 
$totalSkor = $poin;
if ($poin > 500) {
    $hadiahTambahan = "YA";
} else {
    $hadiahTambahan = "TIDAK";
}

echo "Total skor pemain adalah: $totalSkor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan<br>";
?>