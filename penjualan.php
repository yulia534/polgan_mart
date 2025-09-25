<?php
// Daftar barang & harga dipisah
$barang = ["gula", "susu", "garam", "aqua", "le mineral"];
$harga  = [12000, 18000, 13000, 10000, 15000];

echo "<h1>--POLGAN MART--</h1>";

// Array untuk simpan hasil belanja
$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// Jumlah barang ada 5 (tanpa count)
$jumlah_barang = 5;

// Tentukan jumlah pembelian random (2 s/d 5)
$jumlah_pembelian = rand(2, $jumlah_barang);

// Index barang manual
$keys = [0, 1, 2, 3, 4];

for ($i = 0; $i < $jumlah_pembelian; $i++) {
    $idx = array_rand($keys);   // pilih index random dari keys
    $id  = $keys[$idx];         // ambil index barang
    ($keys[$idx]);         // hapus supaya tidak double

    $nama         = $barang[$id];
    $harga_barang = $harga[$id];

    $kuantitas = rand(1, 3);
    $total     = $harga_barang * $kuantitas;
    $grandtotal += $total;

    $beli[] = [
        "nama"   => $nama,
        "harga"  => $harga_barang,
        "jumlah" => $kuantitas,
        "total"  => $total
    ];
}

