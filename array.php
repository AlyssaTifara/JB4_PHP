<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: ".implode(', ', $nilaiLulus)."<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengelamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengelamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengelamanLimaTahun). "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiwa dalam mata kuliah $mataKuliah: <br><br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br><br>";
}


// $daftarNilai = [
//     ['Alice', 85],
//     ['Bob', 92],
//     ['Charlie', 78],
//     ['David', 64],
//     ['Eva', 90],
// ];

// $nilaiRataRata = array_sum($daftarNilai) / count($daftarNilai);
// $nilaiDiAtasRataRata = [];

// foreach ($daftarNilai as $nama => $nilai) {
//     if ($nilai > $nilaiRataRata) {
//         $nilaiDiAtasRataRata[] = "$nama: $nilai";
//     }
// }

// echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas: $nilai <br><br>";

// foreach ($nilaiDiAtasRataRata as $nilai) {
//     echo "$nilai <br>";
// }

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];

$mataKuliah = 'Matematika';
$nilaiRataRata = array_sum(array_column($daftarNilai[$mataKuliah], 1)) / count($daftarNilai[$mataKuliah]);

echo "Daftar nilai matematika siswa yang mencapai nilai di atas rata-rata kelas: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    if ($nilai[1] > $nilaiRataRata) {
        echo "{$nilai[0]}: {$nilai[1]} <br>";
    }
}
?>

