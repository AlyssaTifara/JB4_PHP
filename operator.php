<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurung = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// $a += $b;
// $a -= $b;
// $a *= $b;
// $a /= $b;
// $a %= $b;

echo "Hasil penambahan: {$hasilTambah} <br>";
echo "Hasil pengurangan: {$hasilKurung} <br>";
echo "Hasil pengkalian: {$hasilKali} <br>";
echo "Hasil pembagian: {$hasilBagi} <br>";
echo "Hasil sisa bagi: {$sisaBagi} <br>";
echo "Hasil pangkat: {$pangkat} <br>";
echo "<br>";

echo "Hasil sama: {$hasilSama} <br>";
echo "Hasil tidak sama: {$hasilTidakSama} <br>";
echo "Hasil lebih kecil: {$hasilLebihKecil} <br>";
echo "Hasil lebih besar: {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama dengan: {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama dengan: {$hasilLebihBesarSama} <br>";
echo "<br>";

echo "Hasil And: {$hasilAnd} <br>";
echo "Hasil Or: {$hasilOr} <br>";
echo "Hasil Not A: {$hasilNotA} <br>";
echo "Hasil Not B: {$hasilNotB} <br>";
echo "<br>";

$a += $b;
echo "Hasil 10 += 5 = {$a} <br>";
$a = 10;
$a -= $b;
echo "Hasil 10 -= 5 = {$a} <br>";
$a = 10;
$a *= $b;
echo "Hasil 10 *= 5 = {$a} <br>";
$a = 10;
$a /= $b;
echo "Hasil 10 /= 5 = {$a} <br>";
$a = 10;
$a %= $b;
echo "Hasil 10 %= 5 = {$a} <br>";
echo "<br>";

$hasilIdentik = $a === $b;
echo "Hasil Identik = {$hasilIdentik} <br>";
$hasilTidakIdentik = $a !== $b;
echo "Hasil Tidak Identik = {$hasilTidakIdentik} <br>";
?>