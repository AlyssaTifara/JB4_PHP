<?php
$kursiTotal = 45;
$kursiTerisi = 28;
$kursiKosong = $kursiTotal - $kursiTerisi;

$persentaseKursiKosong = ($kursiKosong / $kursiTotal) * 100;

echo "Jumlah kursi di restoran: $kursiTotal<br>";
echo "Jumlah kursi yang telah ditempati oleh pelanggan: $kursiTerisi<br>";
echo "Jumlah kursi yang masih kosong: $kursiKosong<br>";
echo "Persentase kursi yang masih kosong: $persentaseKursiKosong%<br>";
?>