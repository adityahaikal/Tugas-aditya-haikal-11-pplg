<h1>beginner</h1>
<?php
// Data identitas diri
$nama = "aditya";
$alamat = "bojong malaka";
$jenis_kelamin = "pria";
$no_hp = "0812345679";

// Menampilkan identitas diri
echo "Nama: " . $nama . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
echo "Nomor HP: " . $no_hp . "<br>";
?>
<br>
<h1>intermediate</h1>
<?php
// Data identitas diri
$nama = "aditya";
$umur = 17;

echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";

$dua_angka_terakhir = $umur % 100; 
echo "Dua angka terakhir umur: " . $dua_angka_terakhir . "<br>";
?>
<br>
<h1>expert</h1>
<?php
// Data identitas diri
$nama = "aditya";
$alamat = "bojong malaka";
$jenis_kelamin = "pria";
$no_hp = "0812345679";
$umur = 17;

// Menampilkan identitas diri
echo "Nama: " . $nama . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
echo "Nomor HP: " . $no_hp . "<br>";
echo "Umur: " . $umur . " tahun<br>";

echo "<pre>";
var_dump($nama, $alamat, $jenis_kelamin, $no_hp, $umur);
echo "</pre>";

if ($umur < 30 && $umur % 2 == 1) {
    echo "Kondisi: Umur kurang dari 30 dan umur adalah angka ganjil.";
} else {
    echo "Kondisi tidak memenuhi.";
}
?>
