<?php
// Daftar barang & harga
$nama_barang = ["telur", "kopi", "Gula", "Garam", "Susu"];
$harga_barang = [5000, 4500, 10000, 2000, 15000];

echo "<h1>--POLGAN MART--</h1>";

// Array untuk simpan hasil belanja
$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// Pilih barang secara random
$jumlah_pembelian = rand(2, 5);
for ($i = 0; $i < $jumlah_pembelian; $i++) {
    $idx = array_rand($nama_barang);       // langsung ambil index acak
    $beli[] = $nama_barang[$idx];          // nama barang
    $jumlah[] = rand(1, 3);                // jumlah acak
}

// Tampilkan detail pembelian
echo "<h3>Detail Pembelian</h3>";
foreach ($beli as $i => $nama) {
    $kuantitas = $jumlah[$i];
    $harga = $harga_barang[array_search($nama, $nama_barang)];
    $total = $harga * $kuantitas;
    $grandtotal += $total;

    echo "Nama Barang : $nama <br>";
    echo "Harga Barang: Rp. $harga <br>";
    echo "Jumlah Beli : $kuantitas <br>";
    echo "Total Harga : Rp. $total <br><br>";
}

// Total belanja
echo "<hr>";
echo "<h3>Total Belanja</h3>";
echo "<p>Rp. " . $grandtotal . "</p>";
?>