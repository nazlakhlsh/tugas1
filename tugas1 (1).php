<?php

// Nazla Khalisha, Sistem Informasi 2021 Back End

//nama
$namaDepan = "Nazla";
$namaBelakang = "Khalisha";

//tempat, tanggal lahir
$tempatLahir = "Jakarta";
$tanggalLahir = "9";
$bulanLahir = "Desember";
$tahunLahir = "2002";

//alamat
$namaJalan = "Jalan Pertanian III No. 66";
$kelurahan = "Lebak Bulus";
$kecamatan = "Cilandak";
$kota = "Jakarta Selatan";

//status pernikahan
$statuspernikahan = "belum menikah";

//target IPK
$ip1 = 3.65;
$ip2 = 3.70;
$ip3 = 3.80;
$ip4 = 3.85;
$ip5 = 3.90;
$ip6 = 3.90;
$ip7 = 3.90;
$ip8 = 4.00;
$targetIPK = $ip1 + $ip2 + $ip3 + $ip4 + $ip5 + $ip6 + $ip7 + $ip8;
$targetIPK = $targetIPK*1/8;

//hasil
echo "Nama : " . $namaDepan . " " . $namaBelakang;
echo "<br>";
echo "Tempat, tanggal lahir : " . $tempatLahir . ", " . $tanggalLahir . " " . $bulanLahir . " " . $tahunLahir;
echo "<br>";
echo "Alamat : " . $namaJalan . ", " . $kelurahan . ", " . $kecamatan . ", " . $kota;
echo "<br>";
echo "Status pernikahan : " .$statuspernikahan . ", ";
echo var_dump (false);
echo "<br>";
echo "Tahun lahir kabisat : " . $tahunLahir*1/4 . ", ";
echo var_dump (false);
echo "<br>";
echo "Target indeks prestasi kumulatif : " . $targetIPK;