<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10*5);
$e = $d - $c;

echo "Integer Variables:<br>";
echo "Varibel a: {$a} <br>";
echo "Varibel b: {$b} <br>";
echo "Varibel c: {$c} <br>";
echo "Varibel d: {$d} <br>";
echo "Varibel e: {$e} <br>";
var_dump($e);
echo "<br><br>";

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndo = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndo) / 3;

echo "Float Variables:<br>";
echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indo: {$nilaiBahasaIndo} <br>";
echo "Rata-Rata: {$rataRata} <br>";
var_dump($rataRata);
echo "<br><br>";

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "Boolean Variables:<br>";
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br><br>";

$namaDepan = "Ibnu";
$namaBelakang = 'Jakarta';
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "String Variables:<br>";
echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';
echo $namaLengkap;
echo "<br><br>";

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo "Array Variable:<br>";
echo $listMahasiswa[0];
?>