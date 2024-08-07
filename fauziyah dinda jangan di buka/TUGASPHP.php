<?php
// 1
$list_mahasiswa = [
    ["nama" => "haikal","usia" => 21, "matkul" => "Hukum Tata Negara"],
    ["nama" => "aksara","usia" => 21, "matkul" => "Morfologi Bahasa Indonesia"]
];

echo $list_mahasiswa[0]["nama"]."<br />";
echo $list_mahasiswa[0]["usia"]."<br />";
echo $list_mahasiswa[0]["matkul"]."<br /><br />";

echo $list_mahasiswa[1]["nama"]."<br />";
echo $list_mahasiswa[1]["usia"]."<br />";
echo $list_mahasiswa[1]["matkul"]."<br />";


// 2

$jurusan = [
    [
      "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun"],
        ["nama" => "fattah", "umur" => "19 tahun"],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun"],
          ["nama" => "marsina", "umur" => "20 tahun"],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun"],
          ["nama" => "Fariz", "umur" => "20 tahun"],
      ]
    ]
  ];


  foreach($jurusan as $data){ 
    echo "<hr />";
    echo $data["nama"]. "<br /><br />";
   
    foreach($data["siswa"] as $dokumen){
        echo $dokumen["nama"]."<br />";
    }
  }

// 3

$buku = [
    ['judul' => 'Harry Potter', 'penulis' => 'J.K. Rowling', 'tahun_terbit' => 2001],
    ['judul' => 'Cara membuat kue', 'penulis' => 'Julia', 'tahun_terbit' => 1999],
    ['judul' => 'Lord of the Rings', 'penulis' => 'J.R.R. Tolkien', 'tahun_terbit' => 1954],
    ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun_terbit' => 2023],
    ['judul' => 'Filosofi Untuk diri', 'penulis' => 'Asep', 'tahun_terbit' => 1993],
    ['judul' => 'Belajar PHP kurang dari 2 menit', 'penulis' => 'Safitri', 'tahun_terbit' => 2019],
    ['judul' => 'Ada apa dengan Gavi', 'penulis' => 'Hartati', 'tahun_terbit' => 2011],
  ];

  foreach($buku as $data_buku){
    if($data_buku ["tahun_terbit"] >= 2000){
        echo "<hr />";
        echo "judul:" . $data_buku ["judul"]."<br/>";
        echo "tahun terbit:" . $data_buku ["tahun_terbit"]. "<br/><br/>";
    };
  };

?>