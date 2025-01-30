<?php

$paket = 2; 
$menuTambahan = ["Kentang Goreng", "Nasi", "Telur Rebus"];

if ($paket == 1) {
    $hargaPaket = 12000;
    $pilihanPaket = "Nasi, Ayam Goreng, Teh Botol";
} elseif ($paket == 2) {
    $hargaPaket = 10000;
    $pilihanPaket = "Nasi, Lele Goreng, Es Teh Manis";
} elseif ($paket == 3) {
    $hargaPaket = 20000;
    $pilihanPaket = "Nasi, Ayam Goreng, Lele Goreng, Teh Botol";
} else {
    die("Paket tidak valid");
}

$biayaTambahan = 0;
$detailTambahan = [];
foreach ($menuTambahan as $item) {
    if ($item == "Nasi") {
        $biayaTambahan += 2500;
        $detailTambahan[] = "Nasi";
    } elseif ($item == "Kentang Goreng") {
        $biayaTambahan += 3000;
        $detailTambahan[] = "Kentang Goreng";
    } elseif ($item == "Telur Rebus") {
        $biayaTambahan += 2000;
        $detailTambahan[] = "Telur Rebus";
    }
}

$subtotal = $hargaPaket + $biayaTambahan;
$potongan = 0;
if ($subtotal > 15000) {
    $potongan = $subtotal * 0.10;
}

$totalBayar = $subtotal - $potongan;

echo "<h2>BUKTI PEMBAYARAN PECEL LELE LELO</h2>";
echo "Tanggal Cetak : " . date("d M Y") . "<br>";
echo "Jam Cetak     : " . date("H:i:s") . "<br>";
echo "Nama Pembeli  : Sofyan <br>";
echo "<hr width='25%' align ='left'>";
echo "Pilihan Paket : $pilihanPaket<br>";
echo "Menu Tambahan : " . implode(", ", $detailTambahan) . "<br>";
echo "Harga Paket   : $hargaPaket<br>";
echo "Biaya Tambahan: $biayaTambahan<br>";
echo "<hr width='25%' align ='left'>";
echo "Subtotal      : $subtotal<br>";
echo "Potongan      : $potongan<br>";
echo "<hr width='25%' align ='left'>";
echo "Total Bayar   : $totalBayar<br>";

echo "<a href='input_pecel.php'>Input Kembali</a>";
?> 