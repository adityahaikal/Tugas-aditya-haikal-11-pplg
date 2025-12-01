<h1>beginner</h1>
<?php
$x = 10;

if ($x == 10) {
    echo "Benar!<br>";
} else {
    echo "Salah<br>";
}
?>

<h1>intermediate</h1>
<?php
$x = 10;

if ($x < 20) {
    echo "Benar!<br>";
} elseif ($x == 10) {
    echo "binggo<br>";
} else {
    echo "Salah<br>";
}
?>

<h1>expert</h1>
<?php
// Menampilkan tabel
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Angka 1</th><th>Angka 2</th></tr>";

// Loop untuk membuat baris tabel
for ($i = 0; $i <= 7; $i++) {
    for ($j = 0; $j <= 7; $j++) {

        if ($i % 2 == 0) {
            $color = "silver";
        } else {
            $color = "white";
        }
        
        // Menampilkan baris tabel dengan warna
        echo "<tr style='background-color: $color;'>";
        echo "<td>$i</td><td>$j</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>
