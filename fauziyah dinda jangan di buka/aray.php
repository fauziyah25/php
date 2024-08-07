<?php
//bikib aray pada php 
$daftar_buah = ["pisang","jambu"."alpukad"];

// echo $daftar_buah[0];

//aray object

$siswa = [
    "nama" => "siti",
    "kelas" => 20
]; // array assosiatif

// echo $siswa["nama"];
// echo $siswa["kelas"]

$daftar_siswa = [// array multidimensi
    ["nama" => "siti", "kelas" => 10, "hobi" => ["mancing","berenang"]],
    ["nama" => "azfar", "kelas" => 11]
];

echo $daftar_siswa[0]["hobi"][0];
echo $daftar_siswa[1]["nama"];
?>