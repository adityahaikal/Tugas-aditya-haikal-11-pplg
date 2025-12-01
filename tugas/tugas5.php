<h1>beginner</h1>
<?php
$angka = range(1, 20);

foreach($angka as $a){
    echo $a . "<br>";
}
?>

<h2>inter</h2>
<?php
$siswa = [
    [12345, "Aditya Haikal", "Bandung", "08123456789", "Laki-laki"],
    [12346, "Budi Santoso", "Jakarta", "08129876543", "Laki-laki"],
    [12347, "Citra Ayu", "Surabaya", "08211222333", "Perempuan"]
];

foreach($siswa as $data){
    echo "NIS: " . $data[0] . "<br>";
    echo "Nama: " . $data[1] . "<br>";
    echo "Alamat: " . $data[2] . "<br>";
    echo "No Telp/WA: " . $data[3] . "<br>";
    echo "Jenis Kelamin: " . $data[4] . "<br><br>";
}
?>
<h1>expert</h1>
<?php
$siswa = [
    [
        "nis" => 12345,
        "nama" => "Aditya Haikal",
        "alamat" => "Bandung",
        "telp" => "08123456789",
        "jk" => "Laki-laki"
    ],
    [
        "nis" => 12346,
        "nama" => "Budi Santoso",
        "alamat" => "Jakarta",
        "telp" => "08129876543",
        "jk" => "Laki-laki"
    ],
    [
        "nis" => 12347,
        "nama" => "Citra Ayu",
        "alamat" => "Surabaya",
        "telp" => "08211222333",
        "jk" => "Perempuan"
    ]
];

foreach($siswa as $data){
    echo "NIS: " . $data["nis"] . "<br>";
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Alamat: " . $data["alamat"] . "<br>";
    echo "No Telp/WA: " . $data["telp"] . "<br>";
    echo "Jenis Kelamin: " . $data["jk"] . "<br><br>";
}
?>