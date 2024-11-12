<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $number = $_POST['Number'];
    $product = $_POST['Product'];
    $quantity = $_POST['Quantity'];

    // Tampilkan data untuk konfirmasi
    echo "<h2>Data Pemesanan</h2>";
    echo "<p>Nama: " . htmlspecialchars($name) . "</p>";
    echo "<p>Nomor Telepon: " . htmlspecialchars($number) . "</p>";
    echo "<p>Produk: " . htmlspecialchars($product) . "</p>";
    echo "<p>Jumlah: " . htmlspecialchars($quantity) . "</p>";
} else {
    echo "Form tidak valid!";
}