<h1>beginner</h1>
<?php
// Function untuk menampilkan kalimat
function tampilkanKalimat() {
    echo "Saya Bahagia Hari ini<br>";
}

// Panggil function
tampilkanKalimat();
?>

<h1>intermadiate</h1>
<?php
// Function untuk menampilkan kalimat dengan nama
function tampilkanKalimatDenganNama($nama) {
    echo "Saya $nama Bahagia Hari ini<br>";
}

// Panggil function dengan variabel nama
$tanggal = "John"; // Ganti dengan nama lain sesuai keinginan
tampilkanKalimatDenganNama($tanggal);
?>

<h1>expert</h1>
<?php
// Function untuk menghitung jumlah 2 angka
function hitung($angka1, $angka2) {
    $hasil = $angka1 + $angka2; // Menjumlahkan dua angka
    echo "Jumlah angka umur saya $hasil<br>";
}

// Panggil function dengan dua angka
hitung(3, 3); // Contoh dua angka yang dijumlahkan adalah 3 dan 3
?>
