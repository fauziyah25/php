<?php
$list_motor = ["mio","vario","zupiter","satria"];
echo $list_motor[1];

//==============
$motor = ["nama" => "mio", "tipe" => "matic", "warna" => "merah"];
  // array asosiatif

echo $motor ["nama"];

//================
$list_motor = [
    ["nama" => "nio", "tipe" => "matic", "warna" => "merah"], 
    ["nama" => "vario", "tipe" => "matic", "warna" => "biru"], 
    ["nama" => "pcx", "tipe" => "matic", "warna" => "kuning"],
];
    
    echo $list_motor[1]["nama"];
    echo $list_motor[2]["warna"];

//=================
$penjualan_motor = [
    "penjual" => "asep",
    "tahun_penjualan" => 2824,
    "motor_terjual" => [
    ["nama" => "mio", "bulan_terjual" => "net", "jumlah" => 18], 
    ["nama" => "vario", "bulan_terjual" => "agustus", "jumlah" => 15],
    ["nama" => "PCX", "bulan_terjual" => "juni", "jumlah" => 5],
    ]
];
    
    echo $penjualan_motor["motor_terjual"][0]["nama"];

?>