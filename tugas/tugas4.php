<h1>beginner</h1>
<?php
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

foreach($hari as $h){
    echo $h . "<br>";
}
?>
<h1>intermadiate</h1>
<?php
$bulan12 = "Desember";

$bulan = [
    "Januari", "Februari", "Maret", "April",
    "Mei", "Juni", "Juli", "Agustus",
    "September", "Oktober", "November", $bulan12
];

foreach($bulan as $b){
    echo $b . "<br>";
}
?>

<h1>expert</h1>
<?php
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
?>

<!DOCTYPE html>
<html>
<head>
<style>
.box {
    display:inline-block;
    width:80px;
    padding:10px;
    margin:5px;
    background:#f28a80;
    text-align:center;
    border:1px solid #000;
    font-family:Arial;
}
</style>
</head>
<body>

<?php
foreach($hari as $h){
    echo "<div class='box'>$h</div>";
}
?>

</body>
</html>